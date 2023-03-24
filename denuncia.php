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
  $cantidad = 0;
  $id = $_SESSION['id'];
  $query = "SELECT d.* FROM denunciados AS d WHERE d.id_denunciante IN (SELECT dd.id FROM denunciantes AS dd WHERE usuario_id = $id);";
  $resultado = mysqli_query($conexion, $query);
  $registros = array();
  if (mysqli_num_rows($resultado) > 0) {
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
        echo '<table id="denunciados" class="table table-striped table-hover" width="100%">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Nombre</th>';
        echo '<th scope="col">Apellido</th>';
        echo '<th scope="col">Cedula</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($registros as $registro) {
          echo '<tr>';
          echo '<td>' . $registro['nombre'] . '</td>';
          echo '<td>' . $registro['apellido'] . '</td>';
          echo '<td>' . $registro['cedula'] . '</td>';
          echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';

        // Cerrar la conexión a la base de datos
      } else {
        header('Location: login.php');
      }
      ?>

      <button class="btn btn primary" id="pdf-button">Descargar PDF</button>
      <!-- Add a click event listener to the button -->
      <script>
        var pdfButton = document.getElementById("pdf-button");
        pdfButton.addEventListener('click', function() {
          // Get the HTML table element
          var table = document.getElementById("denunciados");

          // Create a new jsPDF instance
          var doc = new jsPDF();

          // Convert the HTML table to a string of HTML
          var html = table.outerHTML;

          // Generate the PDF file
          doc.fromHTML(html, 10, 10);
          doc.save("denunciasUsuario.pdf");
        });
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