// const { default: Swal } = require("sweetalert2");

let aggressorList = [];

function enviar() {
  const nombre = document.getElementsByName("nombre")[0].value;
  const apellido = document.getElementsByName("apellido")[0].value;
  const cedula = document.getElementsByName("cedula")[0].value;
  const telefono = document.getElementsByName("telefono")[0].value;
  const violenciaOpcion = document.getElementsByName("violencia-option")[0].value;
  const lugar = document.getElementsByName("lugar")[0].value;
  const fecha = document.getElementsByName("fecha")[0].value;
  const hora = document.getElementsByName("hora")[0].value;
  const denuncia = document.getElementsByName("denuncia")[0].value;
  const agresores = JSON.stringify(aggressorList);


  Swal.fire({
    title: 'Estas seguro de procesar la denuncia?',
    text: 'Recuerda las consecuencias de presentar una denuncia falsa. Según el Artículo 253 de la Ley Orgánica de Reforma del Código Orgánico Procesal Penal, cuando el acusador o la acusadora hubiere provocado el proceso por medio de una acusación falsa, y asi fuere declarado por el tribunal, éste le impondrá el pago del doble de las costas (los gastos originados durante el proceso y los honorarios de los abogados o expertos)',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#4ca17a',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si'
  }).then((result) => {
    if (result.isConfirmed) {
      // Crear un objeto de solicitud XMLHttpRequest
      var xhr = new XMLHttpRequest();
      // Generate PDF
      window.jsPDF = window.jspdf.jsPDF;
      const doc = new jsPDF()
      doc.text(`Nombre: ${nombre}`, 10, 10);
      doc.text(`Apellido: ${apellido}`, 10, 20);
      doc.text(`Cedula: ${cedula}`, 10, 30);
      doc.text(`Telefono: ${telefono}`, 10, 40);
      doc.text(`Violencia opcion: ${violenciaOpcion}`, 10, 50);
      doc.text(`Lugar: ${lugar}`, 10, 60);
      doc.text(`Fecha: ${fecha}`, 10, 70);
      doc.text(`Hora: ${hora}`, 10, 80);
      doc.text(`Denuncia: ${denuncia}`, 10, 90);
      doc.text(`Agresores: ${agresores}`, 10, 100);
      const pdfData = doc.output();

      // Prepare email data
      const emailData = {
        nombre,
        apellido,
        cedula,
        telefono,
        violenciaOpcion,
        lugar,
        fecha,
        hora,
        denuncia,
        agresores,
        pdfData,
      };

      xhr.open("POST", "http://localhost/Urbe-App-Web-main/php/send_email.php", true);
      xhr.setRequestHeader("Content-Type", "application/json");
      xhr.send(JSON.stringify(emailData));

      // Handle response
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            // The server responded correctly
            console.log(xhr.responseText);
            alert("Email Sent")
          } else {
            // There was an error sending the email
            console.error(xhr.statusText);
            console.log("Ha habido un error");
          }
        }
      }
      // Configurar la solicitud POST

      // NOTA IMPORTANTE: Si la URL no funciona prueba: "../php/submit.php"
      xhr.open("POST", "http://localhost/Urbe-App-Web-main/php/submit.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.send(
        "nombre=" +
        nombre +
        "&apellido=" +
        apellido +
        "&cedula=" +
        cedula +
        "&telefono=" +
        telefono +
        "&violencia-option=" +
        violenciaOpcion +
        "&lugar=" +
        lugar +
        "&fecha=" +
        fecha +
        "&hora=" +
        hora +
        "&denuncia=" +
        denuncia +
        "&agresores=" +
        agresores
      );

      // Manejar la respuesta de la solicitud
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            // El servidor respondió correctamente

            if (xhr.responseText == "1") {
              // Todo bien
              Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Denuncia registrada con éxito',
                showConfirmButton: false
              });
              function message() {
                location.href = './denuncia.php';
              }
              setTimeout(message, 3500);
            } else {
              // Todo mal
              Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Error al registrar la denuncia',
                showConfirmButton: false
              });
            }
          } else {
            // Hubo un error al enviar la solicitud
            console.error(xhr.statusText);
          }
        }
      };
    }
  });

}

function agregar() {
  // Obtener los valores de los campos de entrada
  // var nombreDenunciado = document.getElementById("txtIdNombre").value;
  // var apellidoDenunciado = document.getElementById("txtIdApellido").value;
  // var cedulaDenunciado = document.getElementById("txtIdCedula").value;

  // var aggressor = {
  //   name: nombreDenunciado,
  //   lastname: apellidoDenunciado,
  //   code: cedulaDenunciado,
  // };

  // aggressorList.push(aggressor);

  // renderList();

  // // Crear un objeto de solicitud XMLHttpRequest
  // var xhr = new XMLHttpRequest();

  // // Configurar la solicitud POST
  // xhr.open("POST", "../php/submit.php", true);
  // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  // // Enviar la solicitud con los datos del denunciado
  // xhr.send("nombre_denunciado=" + nombreDenunciado + "&apellido_denunciado=" + apellidoDenunciado + "&cedula_denunciado=" + cedulaDenunciado);

  // // Manejar la respuesta de la solicitud
  // xhr.onreadystatechange = function () {
  //   if (xhr.readyState === XMLHttpRequest.DONE) {
  //     if (xhr.status === 200) {
  //       // El servidor respondió correctamente
  //       console.log(xhr.responseText);
  //     } else {
  //       // Hubo un error al enviar la solicitud
  //       console.error(xhr.statusText);
  //     }
  //   }
  // };

  const name = document.getElementById("txtIdNombre").value;
  const lastname = document.getElementById("txtIdApellido").value;
  const code = document.getElementById("txtIdCedula").value;

  if (!name || !lastname || !code) {
    return Swal.fire({
      position: 'center',
      icon: 'error',
      title: 'Campo requerido',
      showConfirmButton: false
    });
  }

  if (code.length !== 8) {
    return Swal.fire({
      position: 'center',
      icon: 'error',
      title: 'La cedula es incorrecta',
      showConfirmButton: false
    });
  };

  const isExist = aggressorList.some((aggressor) => aggressor.code === code);

  if (isExist) {
    return Swal.fire({
      position: 'center',
      icon: 'error',
      title: 'El agresor ya se encuentra registrado',
      showConfirmButton: false
    });
  }

  const aggressor = {
    name,
    lastname,
    code,
  };

  aggressorList.push(aggressor);

  renderList();

  document.getElementById("txtIdNombre").value = "";
  document.getElementById("txtIdApellido").value = "";
  document.getElementById("txtIdCedula").value = "";
}
const renderList = () => {
  document.getElementById("denunciado").innerHTML = "";

  for (let i = 0; i < aggressorList.length; i++) {
    const { name, lastname, code } = aggressorList[i];

    const row = `
        <tr>
          <td>${i + 1}</td>
          <td>${name}</td>
          <td>${lastname}</td>
          <td>${code}</td>
          <td>
            <button type="button" class="btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onClick="removeAggressor(${code})">Eliminar</button>
          </td>
        </tr>
      `;

    document.getElementById("denunciado").innerHTML += row;
  }
};

const removeAggressor = (code) => {
  Swal.fire({
    title: 'Estas seguro?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#4ca17a',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si'
  }).then((result) => {
    if (result.isConfirmed) {
      const filteredAggressors = aggressorList.filter((aggressor) => aggressor.code != code);
      aggressorList = filteredAggressors;
    }

    renderList();
  });

};


