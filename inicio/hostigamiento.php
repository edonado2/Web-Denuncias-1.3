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

  <title>Tipos de Violencia | Hostigamiento</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style-hostigamiento.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive-tipos-de-violencia.css" rel="stylesheet" />
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
                  Tipos de Violencia
                </h2>
                <h1 class="section-2">
                  Hostigamiento
                </h1>
                <div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <img src="../images/hostigamiento.jpg" class="img-modifier" alt="...">
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
        <div class=" d-lg-flex px-lg-5 pt-4">
          <div class="col-lg-9">
            <p class="text-justify"> El hostigamiento abarca una amplia gama de comportamientos ofensivos. Normalmente se entiende como una conducta destinada a perturbar o alterar. Según la RAE, hostigar es matar alguien o burlarse de él insistentemente. En el sentido jurídico, es el comportamiento que se encuentra amenazante o perturbador. El hostigamiento o acoso sexual se refiere a los avances sexuales de forma persistente, normalmente en el lugar de trabajo, donde las consecuencias de negarse son potencialmente muy perjudiciales para la víctima.</p>
        
          <div class="heading_container py-5">
            <h2>TIPOS DE HOSTIGAMIENTO</h2>
          </div>

          <p class="text-justify"> Hay una serie de conductas abusivas que entran en esta categoría.</p>

          <p class="mt-3 mb-4 text-justify"><span class="font-weight-bold">• El acoso escolar. </span>  El acoso que puede ocurrir en el patio o cualquier otro lugar de la escuela (puede ser acoso sexual o acoso verbal). Por lo general, física y psicológica de una conducta de acoso perpetrado contra un individuo, por una o más personas. En los últimos años el acoso en el lugar de trabajo y en las escuelas ha salido a la luz como mucho más graves y generalizados que se pensaba.</p>

          <p class="mt-3 mb-4 text-justify"><span class="font-weight-bold">• El acoso psicológico. </span> Este tipo de acoso es un comportamiento humillante, intimidatorio o abusivo que es a menudo difícil de detectar sin dejar evidencia de que no sea víctima de los informes o quejas, lo característico de una persona disminuye la autoestima o les causa tormento. Esto puede tomar la forma de comentarios verbales, episodios de ingeniería de intimidación, acciones agresivas o gestos repetidos. Entran en esta categoría es el acoso laboral por individuos o grupos de mobbing.</p>

          <p class="mt-3 mb-4 text-justify"><span class="font-weight-bold">• El hostigamiento racial. </span>La selección de un individuo por su raza u origen étnico. El acoso puede incluir palabras, obras y acciones que están específicamente diseñados para hacer que el objetivo de sentirse degradado debido a su raza u origen étnico.</p>

          <p class="mt-3 mb-4 text-justify"><span class="font-weight-bold">• Acoso físico o stalking. </span>Los siguientes no autorizados y la vigilancia de una persona, en la medida en que la privacidad de la persona es inaceptable intromisión en, y la víctima teme por su seguridad.</p>

          <p class="mt-3 mb-4 text-justify"><span class="font-weight-bold">• Acoso laboral. </span> Violencia cometidos directa o indirectamente por un grupo vagamente afiliadas y organizada de los individuos para castigar o incluso ejecutar a una persona por algún presunto delito sin un juicio legal. El "delito" puede variar de un delito grave como el asesinato a la simple expresión de actitudes no deseadas étnicas, culturales o religiosas. La cuestión de la culpabilidad real de la víctima o la inocencia suele ser irrelevante para la mafia, ya que la turba por lo general se basa en afirmaciones que no son verificables, sin fundamento, o fabricado por completo.</p>

          <p class="mt-3 mb-4 text-justify"><span class="font-weight-bold">• Ciberacoso. </span>  El uso de herramientas electrónicas como el correo electrónico o mensajería instantánea para hostigar o abusar de una persona o personas. También puede incluir particularmente intensa y / o coordinadas incidentes de arrastre, sobre todo cuando se repiten y se dirigen específicamente a una sola persona o grupo.</p>
          
          </div>
          <div class="col-lg-4  mx-auto" >
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