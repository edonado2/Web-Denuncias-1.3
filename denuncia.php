<?php
if (!isset($_SESSION)) {
  session_start();
} else {
  $_SESSION['session_id'] = session_id();
}
?>
<?php
include './php/conexion_be.php';
// Add missing parentheses to include statement

if (array_key_exists('id', $_SESSION)) {
  $id = $_SESSION['id'];
  $query = "SELECT 
  d.*, 
  dn.nombre AS denunciante_nombre,
  dn.apellido AS denunciante_apellido,
  dn.cedula AS denunciante_cedula,
  dc.tipo_abuso,
  dc.descripcion,
  dc.fecha_abuso,
  dc.hora_acontecimiento
FROM 
  denunciados AS d
  INNER JOIN denunciantes AS dn ON dn.id = d.id_denuncia 
  INNER JOIN denuncias AS dc ON dc.id= d.id
WHERE 
  dn.usuario_id = $id

";

  $query2 = "SELECT 
  dn.*, 
  dd.nombre AS denunciado_nombre,
  dd.apellido AS denunciado_apellido,
  dd.cedula AS denunciado_cedula,
  dc.tipo_abuso,
  dc.descripcion,
  dc.fecha_abuso,
  dc.hora_acontecimiento
FROM 
  denunciantes AS dn
  INNER JOIN denunciados AS dd ON dn.id = dd.id_denuncia 
  INNER JOIN denuncias AS dc ON dc.id = dd.id
WHERE 
  dn.usuario_id = $id";


  $resultado = mysqli_query($conexion, $query);
  $resultado2 = mysqli_query($conexion, $query2);
  $registros = array();
  $registros2 = array();
  if (
    $resultado && mysqli_num_rows($resultado) > 0 &&
    $resultado2 && mysqli_num_rows($resultado2) > 0
  ) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
      $registros[] = $fila;
    }
    while ($fila2 = mysqli_fetch_assoc($resultado2)) {
      $registros2[] = $fila2;
    }
  }
}
?>
<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />
  <title>Denuncia</title>
  <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/denuncia.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/responsive-home.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>


</head>

<body id="body">

  <!-- header section strats -->
  <header class="header_section mb-5">
    <nav class="navbar navbar-expand-lg custom_nav-container fixed-top nav-active">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <span>
            <img src="./images/icon.png" class="img-fluid w-25" alt="...">
          </span>
        </a>
        <div class="navbar-collapse" id="">
          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div id="myNav" class="overlay">
            <div class="overlay-content">
              <a class="link-space" href="index.php">INICIO</a>
              <a class="link-space" href="centros-de-ayuda.php">CENTROS DE AYUDA</a>
              <a class="link-space" href="mapa.php">UBICACIÓN</a>
              <a class="link-space" href="denuncia.php">DENUNCIAS</a>
              <div class="btn-link-bg">
                <?php
                if ($_SESSION) { // if a session is started
                  echo '<a class="link-space" href="perfil.php">PERFIL</a>';
                } else {
                  echo '<div class="btn-link-bg">';
                  echo '<a class="link-space btn-link-space" href="login.php">INICIAR SESIÒN</a>';
                  echo '</div>';
                }
                ?>


              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <?php
  ?>

  <div id="container" class="mt-5">
    <div id="box_Shadow" class="mt-5">

      <a id="button" class="btn btn-primary btn-lg" href="./formulario.php">Emitir una denuncia</a>

      <!-- <button id="button" class="btn btn-primary btn-lg" type="button" href="./formulario.html">Emitir una denuncia</button> -->

      <hr>

      <h2>Historial de denuncias</h2>

      <?php

      if ($_SESSION) { // if a session is started

        // Mostrar los registros en una tabla

        echo '<div class= "table-responsive-sm" style="padding:20px">';
        echo '<table id="denunciados" class="table table-striped table-hover" width="100%">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Fecha</th>';
        echo '<th scope="col">Hora</th>';
        echo '<th scope="col">Tipo Abuso</th>';
        echo '<th scope="col">Nombre</th>';
        echo '<th scope="col">Descargar</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($registros as $registro) {
          echo '<tr>';
          echo '<td>' . $registro['fecha_abuso'] . '</td>';
          echo '<td>' . $registro['hora_acontecimiento'] . '</td>';
          echo '<td>' . $registro['tipo_abuso'] . '</td>';
          echo '<td>' . $registro['nombre'] . '</td>';
          echo '<td><button class="btn btn-secondary pdf-button">Descargar</button></td>';

          echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';


        echo '<div class= "table-responsive-sm" style="padding:20px" hidden>';
        echo '<table id="denunciados" class="table table-striped table-hover" width="100%">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Nombre</th>';
        echo '<th scope="col">Apellido</th>';
        echo '<th scope="col">Cedula</th>';
        echo '<th scope="col">Telefono</th>';
        echo '<th scope="col">Descargar</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';


        foreach ($registros2 as $registro2) {
          echo '<tr>';
          echo '<td>' . $registro2['nombre'] . '</td>';
          echo '<td>' . $registro2['apellido'] . '</td>';
          echo '<td>' . $registro2['cedula'] . '</td>';
          echo '<td>' . $registro2['telefono'] . '</td>';
          echo '<td><button class="btn btn-secondary pdf-button">Descargar</button></td>';

          echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';

        // Cerrar la conexión a la base de datos
      } else {
        header('Location: login.php');
      }
      ?>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.2/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.2/vfs_fonts.js"></script>

      <script>
        var pdfButton = document.getElementsByClassName("pdf-button");
        for (var i = 0; i < pdfButton.length; i++) {
          pdfButton[i].addEventListener('click', function() {
            // Get the HTML table element
            var table = document.getElementById("denunciados");
            // Define table column widths
            var columnWidths = [50, 50, 60, 60, 80, 50];
            var columnWidths2 = [50, 50, 60, 60, 80, 80, 50];

            // Define table headers
            var headers = [{
                text: 'Nombre',
                style: 'tableHeader'
              },
              {
                text: 'Apellido',
                style: 'tableHeader'
              },
              {
                text: 'Cédula',
                style: 'tableHeader'
              },
              {
                text: 'Tipo de Abuso',
                style: 'tableHeader'
              },
              {
                text: 'Fecha',
                style: 'tableHeader'
              },
              {
                text: 'Hora',
                style: 'tableHeader'
              },
            ];

            var headers2 = [{
                text: 'Nombre',
                style: 'tableHeader'
              },
              {
                text: 'Apellido',
                style: 'tableHeader'
              },
              {
                text: 'Cédula',
                style: 'tableHeader'
              },
              {
                text: 'Telefono',
                style: 'tableHeader'
              },
              {
                text: 'Creada',
                style: 'tableHeader'
              },
              {
                text: 'Actualizada',
                style: 'tableHeader'
              },
              {
                text: '#',
                style: 'tableHeader'
              }
            ];


          // Define table data
          <?php
          // Replace with actual denuncia id
          $id_denuncia = $registro['id_denuncia'];
          $denunciante_id = 123;
          $query = "SELECT 
          d.*, 
          dn.nombre AS denunciante_nombre,
          dn.apellido AS denunciante_apellido,
          dn.cedula AS denunciante_cedula,
          dc.tipo_abuso,
          dc.descripcion,
          dc.fecha_abuso,
          dc.hora_acontecimiento
        FROM 
          denunciados AS d
          INNER JOIN denunciantes AS dn ON dn.id = d.id_denuncia 
          INNER JOIN denuncias AS dc ON dc.id = d.id_denuncia
        WHERE 
          dn.usuario_id = $id AND d.id_denuncia = $id_denuncia";

          $result = mysqli_query($conexion, $query);

          // Add query results to a PHP variable
            $denunciados = array();
            while ($registro = mysqli_fetch_assoc($result)) {
              $denunciados[] = $registro;
            }
          ?>

         var data = [];

            <?php
            foreach ($denunciados as $registro) {
            ?>
              data.push([{
                  text: '<?php echo $registro['nombre']; ?>',
                  style: 'tableCell'
                },
                {
                  text: '<?php echo $registro['apellido']; ?>',
                  style: 'tableCell'
                },
                {
                  text: '<?php echo $registro['cedula']; ?>',
                  style: 'tableCell'
                },
                {
                  text: '<?php echo $registro['tipo_abuso']; ?>',
                  style: 'tableCell'
                },
                {
                  text: '<?php echo $registro['fecha_abuso']; ?>',
                  style: 'tableCell'
                },
                {
                  text: '<?php echo $registro['hora_acontecimiento']; ?>',
                  style: 'tableCell'
                },
              ]);
            <?php
            }
            ?>

            // Data 2

            var data2 = [];

            data2.push([{
                text: '<?php echo $registro2['nombre']; ?>',
                style: 'tableCell'
              },
              {
                text: '<?php echo $registro2['apellido']; ?>',
                style: 'tableCell'
              },
              {
                text: '<?php echo $registro2['cedula']; ?>',
                style: 'tableCell'
              },
              {
                text: '<?php echo $registro2['telefono']; ?>',
                style: 'tableCell'
              },
              {
                text: '<?php echo $registro2['createdAt']; ?>',
                style: 'tableCell'
              },
              {
                text: '<?php echo $registro2['updatedAt']; ?>',
                style: 'tableCell'
              },
              {
                text: '<?php echo $registro2['id']; ?>',
                style: 'tableCell'
              }
            ]);

            <?php ?>

            // Define table styles
            var styles = {
              tableHeader: {
                fillColor: '#337ab7',
                color: '#fff',
                bold: true
              },
              tableCell: {
                fillColor: '#fff'
              }
            };

            // Create the PDF document definition
            var docDefinition = {
              content: [{
                  text: 'Datos de la Denuncia',
                  style: 'header'
                },
                {
                  table: {
                    headerRows: 1,
                    widths: columnWidths,
                    body: [headers].concat(data)
                  },
                  layout: 'lightHorizontalLines'
                }
              ],
              styles: styles
            };

            // Create the PDF document definition
            var docDefinition = {
              info: {
                title: 'Datos de la Denuncia',
                subject: 'Descripción del documento',
                author: 'Tu Nombre',
                keywords: 'denuncia, abuso, PDF'
              },
              content: [{
                  text: `<?php echo $registro['createdAt']; ?>`,
                  style: 'content',
                  alignment: 'right'
                },
                {
                  text: 'Datos de la Denuncia',
                  style: 'header'
                },

                {
                  text: `Yo, <?php echo $registro2['nombre']; ?>, <?php echo $registro2['apellido']; ?> C.I: <?php echo $registro2['cedula']; ?>, número de teléfono: <?php echo $registro2['telefono']; ?>, me presento ante su entidad, con la finalidad de dejar constancia de una denuncia contra el(la) señor(es/as):`,

                  margin: [0, 0, 0, 20] // Adds 20 units of spacing to the top
                },
                {
                  table: {
                    headerRows: 2,
                    widths: columnWidths,
                    body: [headers].concat(data)
                  },
                  layout: 'lightHorizontalLines'
                },

                {
                  text: ` 
                  Por medio de la presente, hago constar que toda la información suministrada en esta denuncia es verídica y fidedigna, y me responsabilizo por su veracidad.
                  
                  Conforme a los hechos que a continuación expongo:

                  Tipo de abuso: <?php echo $registro['tipo_abuso']; ?>, lugar de los hechos: Maracaibo, a la fecha de: <?php echo $registro2['fecha_abuso']; ?>, hora: <?php echo $registro2['hora_acontecimiento']; ?>, descripción de la denuncia: <?php echo $registro2['descripcion']; ?>.

                  Declaro bajo juramento que los hechos expuestos en esta denuncia son ciertos y que no he falseado ni alterado información alguna con el fin de causar un daño injustificado a terceros.

                  Asimismo, manifiesto estar plenamente consciente de las consecuencias legales a las que me expongo en caso de presentar una denuncia falsa o de actuar con malicia o mala fe en el proceso. En caso de comprobarse la falsedad de la información aquí expuesta, me someto a las sanciones previstas en la ley.
                  
                  Esperando se tomen las medidas correspondientes me despido cordialmente.
                  
                  `,
                  margin: [0, 30, 0, 80]
                },

                {
                  text: '_________________________________',
                  margin: [40, 0, 40, 80],
                  alignment: 'center'
                }
              ],
              styles: {
                header: {
                  fontSize: 18,
                  bold: true,
                  margin: [0, 0, 0, 10]
                },
                description: {
                  fontSize: 12,
                  margin: [0, 0, 0, 10]
                },
                tableHeader: {
                  fillColor: '#337ab7',
                  color: '#fff',
                  bold: true
                },
                tableCell: {
                  fillColor: '#fff'
                }
              }
            };

            // Create a new PDF document
            var pdfDoc = pdfMake.createPdf(docDefinition);

            // Save the PDF file
            pdfDoc


            // Create a new PDF document
            var pdfDoc = pdfMake.createPdf(docDefinition);

            // Save the PDF file
            pdfDoc.download("denunciasUsuario.pdf");
          });
        }
      </script>



    </div>
  </div>



  <!-- info section -->
  <section class="info_section layout_padding-top">
    <div class="info_logo-box">
      <h2>
        AITANA
      </h2>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-lg-4 col-md-3">
          <h5>
            Sobre Nosotros
          </h5>
          <p>
            Nuestro propósito es que cualquier persona pueda denunciar actos de violencia de forma más rápida
          </p>
        </div>
        <div class="col-lg-4 col-md-3">
          <h5>
            Páginas
          </h5>
          <ul>
            <li>
              <a href="index.php">
                Inicio
              </a>
            </li>
            <li>
              <a href="centros-de-ayuda.php">
                Centros de Ayuda
              </a>
            </li>
            <li>
              <a href="mapa.php">
                Ubicación
              </a>
            </li>
            <li>
              <a href="denuncia.php">
                Denuncias
              </a>
            </li>
          </ul>
        </div>

        <div class="col-md-4 col-lg-4 col-md-3">
          <h5 class="mb-4">
            Descargar Aplicación
          </h5>
          <a href="">
            <div class="div-img-descarga "><img src="images/btn-google-play.png" class="img-descarga" alt=""></div>
          </a>
          <a href="">
            <div class="div-img-descarga "><img src="images/btn-app-store.png" class="img-descarga" alt=""></div>
          </a>
        </div>
        <div class="col-md-3">

        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023 All Rights Reserved</a>
    </p>
  </section>


  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");

      document.getElementById("body").classList.toggle("mobile-nav-active");
    };


    $(window).on("scroll", function() {
      if ($(window).scrollTop() > $("#nav-change").offset().top - 50) {
        $("nav").addClass("nav-active");
      } else {
        $("nav").removeClass("nav-active");
      };
    });
  </script>

  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>