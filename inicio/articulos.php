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
  <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">

  <title>Artículos</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/articulos.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive-articulos.css" rel="stylesheet" />
</head>

<body id="body" class=" ">
  <div class="hero_area bg-hero">
    <!-- header section strats -->
    <header class="header_section">
        <nav class="navbar navbar-expand-lg custom_nav-container fixed-top">
          <div class="container">
            <a class="navbar-brand" href="../index.php">
              <span>
                <img src="../images/icon.png" class="img-fluid w-25" alt="...">
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
                <a class="link-space" href="../index.php">INICIO</a>
                <a class="link-space" href="../centros-de-ayuda.php">CENTROS DE AYUDA</a>
                <a class="link-space" href="../mapa.php">UBICACIÓN</a>
                <a class="link-space" href="../denuncia.php">DENUNCIAS</a>
                <div class="btn-link-bg">
                  <?php
                  if ($_SESSION) { // if a session is started
                    echo '<a class="link-space" href="../perfil.php">PERFIL</a>';
                  } else {
                    echo '<div class="btn-link-bg">';
                    echo '<a class="link-space btn-link-space" href="../login.php">INICIAR SESIÒN</a>';
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
  <section class=" slider_section position-relative pt-md-5 mx-auto">
    <div class="container pt-md-5">
      <div class="row pt-5">
          <div class="detail-box mx-auto px-5">
            <h2 id="nav-change">
              
            </h2>
            <h1 class="section-2 pt-md-3">
                ARTÍCULOS SOBRE VIOLENCIA
              </h1>
              <div>
              </div>
            </div>       
          
        </div>
      </div>
    </section>

    <!-- end slider section -->
  

  <!-- end download section -->
  <div class="container px-md-5">
    <div class="container py-4">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item rounded mb-4">
                    <a href="../inicio/violencia-de-genero-en-latinoamerica.php">
                      <img src="../images/articulo1.jpg" class="img-articulo" alt="">
                      <p class="m-0 text-muted mb-2 px-5 pt-4">Artículos sobre Violencia</p>
                      <h4 class="mb-2 font-weight-bold">
                        <span class="d-block card-title-color px-5">Violencia de género en Latinoamérica</span></h4>
                      <p class="m-0 text-dark mb-4 px-5 font-weight-bold">Universidad del Zulia</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item rounded mb-4">
                  <a href="../inicio/la-violencia-de-todos-los-dias.php">
                    <img src="../images/articulo2.jpg" class="img-articulo" alt="">
                      <p class="m-0 text-muted mb-2 px-5 pt-4">Artículos sobre Violencia</p>
                      <h4 class="mb-2 font-weight-bold">
                        <span class="d-block card-title-color px-5">Maltrato: La violencia de todos los días</span></h4>
                      <p class="m-0 text-dark mb-4 px-5 font-weight-bold">Revista ¿Cómo ves?</p>
                  </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item rounded mb-4">
                  <a href="../inicio/violencia-de-genero-desde-la-salud-mental.php">
                    <img src="../images/articulo3.jpg" class="img-articulo" alt="">
                      <p class="m-0 text-muted mb-2 px-5 pt-4">Artículos sobre Violencia</p>
                      <h4 class="mb-2 font-weight-bold">
                        <span class="d-block card-title-color px-5">Violencia de género desde la Salud Mental</span></h4>
                      <p class="m-0 text-dark mb-4 px-5 font-weight-bold">Clínica San Pablo S.A</p>
                  </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item rounded mb-4">
                  <a href="../inicio/consecuencias-de-la-violencia.php">
                    <img src="../images/articulo4.jpg" class="img-articulo" alt="">
                      <p class="m-0 text-muted mb-2 px-5 pt-4">Artículos sobre Violencia</p>
                      <h4 class="mb-2 font-weight-bold">
                        <span class="d-block card-title-color px-5">Consecuencias de la violencia en la crianza</span></h4>
                      <p class="m-0 text-dark mb-4 px-5 font-weight-bold">UNICEF</p>
                  </a>
                </div>
            </div>
        </div>
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
              <a href="../index.php">
                Inicio
              </a>
            </li>
            <li>
              <a href="../centros-de-ayuda.php">
                Centros de Ayuda
              </a>
            </li>
            <li>
              <a href="../mapa.php">
                Ubicación
              </a>
            </li>
            <li>
              <a href="../denuncia.php">
                Denuncias
              </a>
            </li>
          </ul>
        </div>

        <div class="col-md-4 col-lg-4 col-md-3">
          <h5 class="mb-4">
            Descargar Aplicación
          </h5>
          <a href=""><div  class="div-img-descarga "><img src="../images/btn-google-play.png" class="img-descarga" alt=""></div></a>
          <a href=""><div  class="div-img-descarga "><img src="../images/btn-app-store.png" class="img-descarga" alt=""></div></a>
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

  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");

        document.getElementById("body").classList.toggle("mobile-nav-active");
    };

  

    $(window).on("scroll", function () {
  if ($(window).scrollTop() > $("#nav-change").offset().top - 50) {
    $("nav").addClass("nav-active");
  } else {
    $("nav").removeClass("nav-active");
  };
});

  </script>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>

   <!-- Template Javascript -->
   <script src="../js/main.js"></script>

</body>

</html>