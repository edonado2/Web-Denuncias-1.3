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

  <title>Información de Denuncias | ¿Qué debo de hacer si me culpan de algo que no hice?</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style-denuncia6.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive-denuncia.css" rel="stylesheet" />
</head>

<body id="body">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <nav class="navbar navbar-expand-lg custom_nav-container fixed-top">
          <div class="container">
            <a class="navbar-brand" href="../index.php">
              <span>
                <img src="../images/icon.png" class="img-fluid w-25" alt="...">
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

    <section class="slider_section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mt-4">
            <div class="detail-box mt-md-5">
              <div class="detail-box">
                <h2 id="nav-change">
                  Información de Denuncias
                </h2>
                <h1 class="section-2">
                  ¿QUÉ DEBO DE HACER SI ME CULPAN DE ALGO QUE NO HICE?
                </h1>
                <div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <img src="../images/denuncia5-foto.jpg" class="img-modifier" alt="...">
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  

  <!-- feature section -->
  <section class="feature_section layout_padding2 layout_margin" id="organizaciones">
    <div class="container">
      
    <div >

      <section class="client_section px-lg-5">
            <div class=" d-lg-flex pt-lg-4 ">
              <div class="col-lg-9 mx-auto">
                <p class="text-justify"> Cuando se llega al grado de acusar por un delito a una persona, es importante que primero se evalúen cuáles fueron las causas y las consecuencias a fin de probar que, si ocurrió el hecho delictivo y que afectó la integridad de otra persona, para entonces así, proceder a poner una demanda penal.</p>

                <p class="text-justify"> Por ello, cuando se desenlazan este tipo de eventualidades es necesario que la persona cuenta con la asesoría de un abogado penalista que vele por defender sus intereses y probar que los hechos por el cuales se le están acusando son falsos. </p>

                <h4 class="mt-5 mb-3 font-weight-bold">¿QUÉ DERECHOS TIENEN LAS PERSONAS ACUSADAS DE UN DELITO?</h4>

                <p class="text-justify"> Si usted es acusado de un delito tiene los siguientes derechos constitucionales:</p>

                <p class="text-justify px-lg-3 px-4"><span class="font-weight-bold">• </span> Declararse inocente y tener un juicio ante un tribunal o jurado.</p>

                <p class="text-justify px-lg-3 px-4"><span class="font-weight-bold">• </span> Ser representado por un abogado defensor durante todo el juicio y el proceso que conduzca a ese juicio.</p>

                <p class="text-justify px-lg-3 px-4"><span class="font-weight-bold">• </span> Solicitar un defensor público designado por el tribunal si no tiene los medios para pagar uno.</p>

                <p class="text-justify px-lg-3 px-4"><span class="font-weight-bold">• </span> Ser considerado inocente, a menos que el fiscal presente pruebas que demuestren su culpabilidad más allá de toda duda razonable.</p>

                <p class="text-justify px-lg-3 px-4"><span class="font-weight-bold">• </span> Confrontar y contrainterrogar a los testigos llamados a declarar en su contra.</p>

                <p class="text-justify px-lg-3 px-4"><span class="font-weight-bold">• </span> Presentar pruebas en su defensa y exigir la presencia de testigos mediante citaciones emitidas por el tribunal.</p>

                <p class="text-justify px-lg-3 px-4"><span class="font-weight-bold">• </span> Permanecer en silencio durante los procedimientos penales o testificar en defensa propia. Su silencio no podrá ser usado en su contra.</p>

                <p class="text-justify px-lg-3 px-4"><span class="font-weight-bold">• </span> Apelar a un tribunal superior para que revise la sentencia.</p>

          <div class="client_container mt-5">
            <p class="font-weight-bold text-link mt-2">Más información sobre denuncias</p>
            <a class="w-100" href="../centros-de-ayuda/denuncia1.php">¿Cuáles son tus derechos al denunciar?</a>
            <a class="w-100" href="../centros-de-ayuda/denuncia2.php">¿Es necesario contar con pruebas al denunciar?</a>
            <a class="w-100" href="../centros-de-ayuda/denuncia3.php">¿Qué es un órgano receptor de denuncia?</a>
            <a class="w-100" href="../centros-de-ayuda/denuncia4.php">¿Qué datos debe de contener una denuncia?</a>
            <a class="w-100" href="../centros-de-ayuda/denuncia5.php">¿Cómo hacer seguimiento a una denuncia?</a>
            <a class="w-100" href="../centros-de-ayuda/denuncia7.php">Consecuencias de presentar una denuncia falsa</a>
          </div>

              </div>            
            </div>
      </section>
    
    </div>
  </section>

  <!-- end feature section -->


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