<?php
if (!isset($_SESSION)) {
  session_start();
} else {
  $_SESSION['id'] = session_id();
}
?>
<?php include './php/conexion_be.php' ?>
<!DOCTYPE html>
<html>




<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

  <title>AITANA | Perfil</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/perfil.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive-home.css" rel="stylesheet" />
</head>

<body id="body" class=" ">
  <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <!-- header section strats -->
  <header class="header_section">
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

  <!-- slider section -->
  <section class="hero_area slider_section position-relative pt-md-5">
    <div class="container pt-md-5">
      <div class="row pt-5">
        <div class="detail-box px-lg-5">
          <h2>
            Perfil
          </h2>
          <!-- <h1 class="section-2">
                Tienes el poder de protegerte <br />
                contra la violencia
              </h1> -->
        </div>
      </div>
    </div>
  </section>

  <!-- end slider section -->

  <?php
  $id = $_SESSION['id'];
  $sql = "SELECT nombre FROM usuarios WHERE id = $id";
  $result = mysqli_query($conexion, $sql);
  if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $nombre = $row['nombre'];
  } else {
    $nombre = "Desconocido";
  }

  // Store the user's name in the session
  $_SESSION['nombre'] = $nombre;
  ?>

  <?php

  $email = $_SESSION['email'];
  ?>
  <!-- end download section -->
  <div class="container-fluid bg-white px-xl-5 p-5">
    <div class="container-fluid px-lg-5">
      <h3 class="section-2">Nombre</h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?php echo $nombre; ?></li>
      </ol>
      <h3 class="section-2">Correo Electrónico</h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><?php echo $email; ?></li>
      </ol>

      <h3 class="px-4 py-4">
        Cambiar contraseña
      </h3>
      <div class="card-body bg-color mb-5">
        <ul class="list-group list-group-flush p-4">
          <form action="" method="post" name="frmChangePass" id="frmChangePass">
            <div class="form-group mb-3">
              <label class="mb-3 section-2">Contraseña Actual</label>
              <input type="password" name="passactual" id="actual" placeholder="Clave Actual" required class="form-control">
            </div>
            <div class="form-group mb-3">
              <label class="mb-3 section-2">Nueva Contraseña</label>
              <input type="password" name="nueva" id="nueva" placeholder="Nueva Clave" required class="form-control">
            </div>
            <div class="form-group mb-4">
              <label class="mb-4 section-2">Confirmar Contraseña</label>
              <input type="password" name="confirmar" id="confirmar" placeholder="Confirmar clave" required class="form-control">
            </div>
            <div class="alertChangePass" style="display:none;">
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" name="cambiarpass" class="btn btn-contraseña btnChangePass">Cambiar Contraseña</button>
            </div>
            <?php
            function get_my_db()
            {
              static $db;

              if (!$db) {
                $db = new mysqli("127.0.0.1", "root", "", "aitana_bd");
              }

              return $db;
            }
            // Include database connection file
            $db = get_my_db();

            if (isset($_POST["cambiarpass"])) {
              $passActual = $db->real_escape_string($_POST["passactual"]);
              $pass1 = $db->real_escape_string($_POST['nueva']);
              $pass2 = $db->real_escape_string($_POST['confirmar']);

              // Hash the passwords
              $passActualHashed = password_hash($passActual, PASSWORD_DEFAULT);
              $pass1Hashed = password_hash($pass1, PASSWORD_DEFAULT);
              $pass2Hashed = password_hash($pass2, PASSWORD_DEFAULT);

              $sql = $db->query("SELECT contrasena FROM usuarios WHERE id = '" . $_SESSION['id'] . "'");
              $rowA = $sql->fetch_array();

              if (password_verify($passActual, $rowA["contrasena"])) {
                if ($pass1 == $pass2) {
                  $sqlUpdate = $db->query("UPDATE usuarios SET contrasena = '$pass1Hashed' WHERE id = '" . $_SESSION['id'] . "'");
                  if ($sqlUpdate) {
                    echo "<script>Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Contraseña actualizada con éxito',
                      showConfirmButton: false
                    });</script>";
                  } else {
                    echo "<script>Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'Error al actualizar la contraseña',
                      showConfirmButton: false
                    });</script>";
                  }
                } else {
                  echo "<script>Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Las contraseñas no coinciden',
                    showConfirmButton: false
                  });</script>";
                }
              } else {
                echo "<script>Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Tu contraseña actual no coincide',
                  showConfirmButton: false
                });</script>";
              }
            }
            ?>
          </form>
        </ul>
        </ul>
      </div>
      <?php
      if ($_SESSION) { // if a session is started
        echo '<a class="card-btn mt-5" href="./php/logout.php">CERRAR SESIÒN</a>';
      } else {
      }
      ?>
    </div>
  </div>



  <!-- end download section -->




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
              <a href="">
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
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");

      document.getElementById("body").classList.toggle("mobile-nav-active");
    };
  </script>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>

</body>

</html>