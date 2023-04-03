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

  $resultado = mysqli_query($conexion, $query);
  $registros = array();
  if (
    $resultado && mysqli_num_rows($resultado) > 0
  ) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
      $registros[] = $fila;
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
            var columnWidths = [100, 100, 100, 100, 100, 100];

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
              }
            ];

            // Define table data
            var data = [];

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
                  text: 'Datos de la Denuncia',
                  style: 'header'
                },
                {
                  text: 'Descripción del documento: Esta denuncia no es válida hasta que sea sellada por un organismo competente',
                  style: 'description'
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