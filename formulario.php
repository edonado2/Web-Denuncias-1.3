<?php
if (!isset($_SESSION)) {
  session_start();
} else {
  $_SESSION['session_id'] = session_id();
}
?>
<?php include './php/conexion_be.php' ?>
<?php
$cantidad = 0;
$query = "SELECT * FROM denunciados";
$resultado = $conexion->query($query);
$registros = array();
if ($resultado->num_rows > 0) {
  while ($fila = $resultado->fetch_assoc()) {
    $registros[] = $fila;
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/formulario.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />
  <title>Denuncia</title>
  <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap-form.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/responsive-home.css">
  <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
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

  <div id="container" class="mt-5">
    <div id="box_Shadow" class="mt-5">

      <form id="form" class="row g-3 needs-validation mt-5 mx-md-5" novalidate>

        <!-- Denunciante -->

        <h2 class="text-center">Datos del denunciante</h2>

        <div class="col-md-5">
          <label for="validationCustom01" class="form-label">Nombre del denunciante:</label>
          <input type="text" name="nombre" class="form-control" placeholder="Primer y segundo nombre" id="validationCustom01" required>
        </div>

        <div class="col-md-5">
          <label for="validationCustom02" class="form-label">Apellido del denunciante:</label>
          <input type="text" name="apellido" class="form-control" placeholder="Primer y segundo apellido" id="validationCustom02" required>
        </div>

        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Cédula del denunciante</label>
          <input type="text" name="cedula" class="form-control" placeholder="Ingrese su cédula" id="validationCustom03" required>
        </div>

        <div class="col-md-3">
          <label for="validationCustom05" class="form-label">Número de télefono del denunciante:</label>
          <input type="tel" name="telefono" class="form-control" placeholder="Ingrese su numero de telefono" id="validationCustom05" required>
        </div>

        <hr>

        <!-- Denunciado -->

        <h2 class="text-center">Datos del denunciado</h2>

        <div class="col-md-4">
          <label for="txtIdNombre" class="form-label">Nombre del denunciado:</label>
          <input type="text" name="nombre-denunciado" class="form-control" id="txtIdNombre" placeholder="Primer y segundo nombre del denunciado" required>
        </div>

        <div class="col-md-4">
          <label for="txtIdApellido" class="form-label">Apellido del denunciado:</label>
          <input type="text" name="apellido-denunciado" class="form-control" id="txtIdApellido" placeholder="Primer y segundo apellido del denunciado" required>
        </div>

        <div class="col-md-6">
          <label for="txtIdCedula" class="form-label">Cédula del denunciado</label>
          <input type="text" name="cedula-denunciado" class="form-control" id="txtIdCedula" placeholder="Ingrese la cédula del denunciado" required focus>
        </div>

        <div class="overflow-auto">
          Tabla de denunciados
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
              </tr>
            </thead>
            <tbody id="denunciado" class="table-group-divider">

            </tbody>
          </table>

        </div>
        <button id="button" class="btn d-grid gap-2 mb-4" type="button" onclick="agregar()">Agregar</button>

        <hr>

        <!-- Denuncia -->

        <h2 class="text-center">Datos de la denuncia</h2>

        <div>
          <label for="validationCustom03" class="form-label">Tipo de abuso:</label>
          <select name="violencia-option" class="form-select" required aria-label="select example">
            <option value="">Selecione el tipo de abuso</option>
            <option value="ACCESO CARNAL VIOLENTO">ACCESO CARNAL VIOLENTO</option>
            <option value="ACOSO SEXUAL">ACOSO SEXUAL</option>
            <option value="ACOSO U HOSTIGAMIENTO">ACOSO U HOSTIGAMIENTO</option>
            <option value="AMENAZA">AMENAZA</option>
            <option value="ESCLAVITUD SEXUAL">ESCLAVITUD SEXUAL</option>
            <option value="ESTERILIZACIÓN FORZADA">ESTERILIZACIÓN FORZADA</option>
            <option value="PROSTITUCIÓN FORZADA">PROSTITUCIÓN FORZADA</option>
            <option value="TRÁFICO DE MUJERES-N-A">TRÁFICO DE MUJERES, NIÑAS Y ADOLESCENTES</option>
            <option value="TRATA DE MUJERES-N-A">TRATA DE MUJERES, NIÑAS Y ADOLESCENTES</option>
            <option value="VIOLENCIA CONTRA LAS MUJERES">VIOLENCIA CONTRA LAS MUJERES</option>
            <option value="VIOLENCIA DOMÉSTIC">VIOLENCIA DOMÉSTICA</option>
            <option value="VIOLENCIA FÍSICA">VIOLENCIA FÍSICA</option>
            <option value="VIOLENCIA INSTITUCIONAL">VIOLENCIA INSTITUCIONAL</option>
            <option value="VIOLENCIA LABORAL">VIOLENCIA LABORAL</option>
            <option value="VIOLENCIA MEDIÁTICA">VIOLENCIA MEDIÁTICA</option>
            <option value="VIOLENCIA OBSTÉTRICA">VIOLENCIA OBSTÉTRICA </option>
            <option value="VIOLENCIA PATRIMONIAL Y ECONÓMICA">VIOLENCIA PATRIMONIAL Y ECONÓMICA</option>
            <option value="VIOLENCIA PSICOLÓGICA">VIOLENCIA PSICOLÓGICA</option>            
            <option value="VIOLENCIA SEXUAL">VIOLENCIA SEXUAL</option>
            <option value="VIOLENCIA SIMBOLICA">VIOLENCIA SIMBÓLICA</option>

          </select>
        </div>

        <div class="col-md-3">
          <label for="validationCustom05" class="form-label">Lugar del acontecimiento:</label>
          <input type="text" name="lugar" class="form-control" placeholder="Ingrese lugar del acontecimiento" id="validationCustom05" required>
        </div>

        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Fecha del acontecimiento:</label>
          <input type="date" name="fecha" class="form-control" id="validationCustom03" required>
        </div>

        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Hora del acontecimiento:</label>
          <input type="time" name="hora" class="form-control" id="validationCustom03" required>
        </div>

        <form class="was-validated">
          <div>
            <label for="validationTextarea" class="form-label">Denuncia:</label>
            <textarea id="textarea" name="denuncia" class="form-control" id="validationTextarea" placeholder="Ingresar la denuncia" required></textarea>
          </div>

          <div class="d-flex justify-content-center gap-5">

            <button class="btn btn-outline-success btn-lg" type="button" onclick="enviar()">Procesar</button>

            <a class="btn btn-outline-danger btn-lg" href="./denuncia.php">Cancelar</a>

          </div>

        </form>


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

  <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="js/denunciados-datos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
  <script src="js/bootstrap-form.js"></script>

</body>

</html>