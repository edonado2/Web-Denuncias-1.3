<?php
if (!isset($_SESSION)) {
  session_start();
} else {
  $_SESSION['session_id'] = session_id();
}
?>


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
  <title>AITANA | Mapa</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap"
    rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style-mapa.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body id="body">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <span>
              <img src="images/icon.png" class="img-fluid w-25" alt="...">
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
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

    <section class="slider_section position-relative pt-md-5">
      <div class="container pt-md-5">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="detail-box mt-5">
                <h2 id="nav-change">
                  aitana
                </h2>
                <h1 class="section-2">
                  Ubicación de los Centros de Ayuda
                </h1>
                <div>
                  <a href="#organizaciones">
                    ClicK aquí
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 img-box">
            <img src="images/mapa-hero.png" class="img-modifier" alt="...">
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->


    <!-- feature section -->
    <section class="feature_section layout_padding2 layout_margin" id="organizaciones">
      <div class="container">
        <div class="heading_container">
          <h2>
            Ubicación de las organizaciones a las que <br />
            puedes solicitar ayuda en Venezuela
          </h2>
        </div>
        <section class="client_section  mt-5">
          <div class="container mx-auto">
            <h3 class="mb-4 text-center font-weight-bold text-purple" style="color: #66439A;">Ministerio Público</h3>
            <div class="d-flex justify-content-center">
              <iframe class="mb-5"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15683.66069769599!2d-71.6154646!3d10.6636921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8998e3c210e137%3A0x826875471e54313f!2sMinisterio%20P%C3%BAblico!5e0!3m2!1ses-419!2sve!4v1679676516312!5m2!1ses-419!2sve" width="640" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <h3 class="mb-4 text-center font-weight-bold text-purple mt-5" style="color: #66439A;">Defensoría Pública</h3>
            <div class="d-flex justify-content-center">
              <iframe class="mb-5"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15682.917092707183!2d-71.6069867!3d10.6781095!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8998c5245ae851%3A0x3153bbccb6292ff2!2sDefensoria%20Publica%20Maracaibo!5e0!3m2!1ses-419!2sve!4v1679676587315!5m2!1ses-419!2sve" width="640" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <h3 class="mb-4 text-center font-weight-bold text-purple mt-5" style="color: #66439A;">Instituto Nacional de la Mujer</h3>
            <div class="d-flex justify-content-center">
              <iframe class="mb-5" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15683.214692039062!2d-71.6035398!3d10.6723418!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8998c3b60de2e7%3A0x68b991010241cb6e!2sEdificio%20INMUJER%20(Instituto%20Nacional%20de%20la%20Mujer)!5e0!3m2!1ses-419!2sve!4v1679676217888!5m2!1ses-419!2sve" width="640" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <h3 class="mb-4 text-center font-weight-bold text-purple mt-5" style="color: #66439A;">Gobernación del Estado Zulia</h3>
            <div class="d-flex justify-content-center">
              <iframe class="mb-5" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15684.01016948632!2d-71.606173!3d10.6569097!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e899948e262dd2b%3A0x18a0077de7325606!2sGOBERNACION%20DEL%20ESTADO%20ZULIA!5e0!3m2!1ses-419!2sve!4v1679676323768!5m2!1ses-419!2sve" width="640" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

              <h3 class="mb-4 text-center font-weight-bold text-purple mt-5" style="color: #66439A;">Jefatura de Policia</h3>
              <div class="d-flex justify-content-center">
                <iframe class="mb-5"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15682.495619747282!2d-71.6241335!3d10.6862727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e89992967bc3199%3A0xef2a5e083f392f37!2sComandancia%20Policia%20Bolivariana%20Estado%20Zulia%2C%20Av.%20Las%20Delicias%2C%20Calle%2059%2C%20Maracaibo%204002%2C%20Zulia!5e0!3m2!1ses-419!2sve!4v1679677140699!5m2!1ses-419!2sve" width="640" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>

              
            <h3 class="mb-4 text-center font-weight-bold text-purple mt-5" style="color: #66439A;">Sistema Municipal de Protección de<br>Niños, Niñas y Adolescentes</h3>
            <div class="d-flex justify-content-center">
              <iframe class="mb-5" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15697.835014435386!2d-71.4383315!3d10.3850911!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e89c7047a436f95%3A0x74863c9ae1f7a427!2sSistema%20Municipal%20de%20Protecci%C3%B3n%20de%20Ni%C3%B1os%2C%20Ni%C3%B1as%20y%20Adolescentes%20Cabimas%20SMPNNAC!5e0!3m2!1ses-419!2sve!4v1679677750017!5m2!1ses-419!2sve" width="640" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </section>

      </div>
    </section>

    

    <!-- end feature section -->

    <!-- download section -->

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
      }

      $(window).on("scroll", function () {
        if ($(window).scrollTop() > $("#nav-change").offset().top - 50) {
          $("nav").addClass("nav-active");
        } else {
          $("nav").removeClass("nav-active");
        };
      });

    </script>
</body>

</html>