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

  <title>Recomendación | ¿QUÉ DEBO HACER SI SOY VÍCTIMA O TESTIGO DE UNA AGRESIÓN?</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style-recomendacion1.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive-articulos.css" rel="stylesheet" />
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
  </div>


  <div id="nav-change"></div>
    <!-- <section class="slider_section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mt-4">
            <div class="detail-box mt-md-5">
              <div class="detail-box">
                <h2 id="nav-change">
                  
                </h2>
                
                <div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section> -->

    <!-- end slider section -->
  

  <!-- feature section -->
  <section class="feature_section layout_padding2 layout_margin" id="organizaciones">
    <div class="container" >
      
    <div >

      <section class="client_section px-lg-5 px-3">
        <div class=" d-lg-flex px-lg-5 pt-4">
          <div class="px-lg-5">
            <h1 class="section-2">
                ¿QUÉ DEBO HACER SI SOY VÍCTIMA O TESTIGO DE UNA AGRESIÓN?
            </h1>
            <p class="text-justify mt-5">Si ves que agreden a una persona, escuchas insultos o presencias cómo la atacan, no mires hacia otro lado.</p>

            <div class="heading_container py-5">
                <h2>¿CÓMO ACTUAR SI ERES TESTIGO ANTE ESTOS CASOS?</h2>
            </div>

            <p class="text-justify "> Algunas formas de violencias por motivos de género son explícitas, como la violencia física, el abuso sexual o las amenazas. Otras, son menos evidentes o no están visibilizadas como violencias: el humor sexista, las actitudes que controlan y dominan o manifestaciones de machismo cotidiano como las que se ven en las publicidades o en los medios de comunicación.</p>
            <p class="text-justify"><span class="font-weight-bold">• </span>Creer y validar lo que relatan las víctimas, tener una actitud de escucha que transmita un: “Yo sí te creo”. Darle valor a su relato permite contradecir la idea que coloca esta situación en el ámbito de lo privado, lo íntimo o lo invisible.</p>


          <p class="text-justify"><span class="font-weight-bold">• </span>Construir un vínculo de confianza con la victima.</p>

          <p class="text-justify"><span class="font-weight-bold">• </span>Si sos familiar o parte del entorno cercano, es importante que la contengas y acompañes para que se sientas más protegida.</p>

          <p class="text-justify"><span class="font-weight-bold">• </span>Ante una emergencia o una situación de gravedad extrema, se debe intervenir protegiendo la integridad física y psíquica de la persona y llamando al 911 inmediatamente.</p>

          <p class="text-justify"><span class="font-weight-bold">• </span>La posterior declaración de testigos del hecho, es una parte fundamental en el proceso de denuncia.</p>

          <div class="heading_container py-5">
            <h2>¿QUÉ HACER SI ERES VÍCTIMA DE VIOLENCIA?</h2>
        </div>

        <p class="text-justify"><span class="font-weight-bold">• </span>Vencer el miedo y contar a personas cercanas lo que estás viviendo. Su apoyo será fundamental en tu protección.</p>

        <p class="text-justify"><span class="font-weight-bold">• </span>Es importante que cada vez que vivas un episodio de violencia, hagas la denuncia correspondiente en cualquiera de los siguientes organimos: Ministerio Público, Prefecturas y jefaturas civiles, órganos de policias...</p>

        <p class="text-justify"><span class="font-weight-bold">• </span>El Estado tiene herramientas para la orientación, atención psicológica, social y jurídica.</p>

        <p class="text-justify"><span class="font-weight-bold">• </span>Podés solicitar protección ante hechos de violencia intra familiar.</p>

          
          </div>
          <!-- <div class="col-lg-4  mx-auto" >
            <div class="client_container">
              <p class="font-weight-bold text-link"> Páginas que te puedan interesar</p>
              <a class="link-side" href="violencia-de-genero.php">Violencia de Género</a>
              <a class="link-side" href="violencia-fisica.php">Violencia Física</a>
              <a class="link-side" href="violencia-psicologica.php">Violencia Psicológica</a>
              <a class="link-side" href="violencia-sexual.php">Violencia Sexual</a>
              <a class="link-side" href="hostigamiento.php">Hostigamiento</a>
              <a class="link-side" href="violencia-domestica.php">Violencia  Doméstica</a>
            </div>
            <div class="mx-auto p-3 pb-5">
              <img src="../images/frase1.jpg" class="img-side pb-5" alt="">
            </div>
          </div> -->
    
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