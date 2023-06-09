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

  <title>AITANA | Centros de Ayuda</title>

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
  <link href="css/style-centros-de-ayuda.css" rel="stylesheet" />
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
                  ¿Donde puedo realizar <br />
                  una denuncia?
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
            <img src="images/denuncia-hero.png" class="img-modifier" alt="...">
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
            Organizaciones a las que <br />
            puedes solicitar ayuda en Venezuela
          </h2>
        </div>
      </div>
      <div>

        <section class="client_section">
          <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="client_container layout_padding2">
                    <div class="client_text">
                      <span class="text-primary font-weight-bold">APOYO PSICOLÓGICO</span>
                      <p>
                        Conoce las organizaciones que brindan ayuda para satisfacer las necesidades mentales,
                        emocionales, sociales y espirituales de los pacientes y sus familias. La terapia psicológica es
                        de suma importancia ya que puede ayudarte a superar bloqueos emocionales y desarrollar
                        estrategias que permitan afrontar tu presente o futuro.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="client_container layout_padding2">
                    <div class="client_text">
                      <span class="text-primary font-weight-bold">APOYO LEGAL Y PSICOLÓGICO</span>
                      <p>
                        Conoce las organizaciones que ofrecen asesoría legal a mujeres víctimas y a familiares y apoyo
                        psicosocial. Con el apoyo psicológico y/o jurídico gratuito, te acompañamos y entrenamos en
                        estrategias para afrontar los problemas que pueden alterar la estabilidad personal, y así
                        fortalecer la vida familiar, laboral y social.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="client_container layout_padding2">
                    <div class="client_text">
                      <span class="text-primary font-weight-bold">ÓRGANOS RECEPTORES DE DENUNCIA</span>
                      <p>
                        Conoce a los entes del Estado con competencia para recibir cualquier tipo de denuncia. Los
                        ciudadanos, víctimas o no, que tengan conocimiento de la comisión de un hecho punible, pueden
                        formular su denuncia verbalmente o por escrito ante los siguientes órganos de investigaciones
                        penales.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="client_container layout_padding2">
                    <div class="client_text">
                      <span class="text-primary font-weight-bold">SERVICIO DE ATENCIÓN CUANDO LA VICTIMA ES UN
                        NIÑO/A</span>
                      <p>
                        Conoce las organizaciones de ayuda social que brindan apoyo y atención psicológica a niños,
                        niñas y adolescentes. Si usted sabe o sospecha que un niño ha sido maltratado, comuníquese con
                        la policía local, las autoridades investigarán la denuncia y, tomarán las medidas adecuadas para
                        garantizar la seguridad del niño.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
        </section>

      </div>
      <div class="d-flex justify-content-center">
        <a href="centros-de-ayuda/organizaciones.php">
          Solicitar más información
        </a>
      </div>
    </section>

    <!-- end feature section -->

    <!-- download section -->

    <div class="container">
      <div class="row gx-0 px-lg-4 px-sm-0 mb-4 mb-lg-5 align-items-center mx-auto">
        <div class="col-xl-5 col-md-12">
          <div class="filter mb-lg-5"><img src="images/denuncia-web.png" alt="" class="img-denuncia"></div>
        </div>
        <div class="col-xl-7">
          <div class="featured-text ">
            <h3 class="font-weight-bold mb-3 mt-5 mt-lg-0">¿Cómo es el proceso de denuncia?</h3>
            <p class="mb-0 text-justify"> En Venezuela, el Ministerio Público establece que todo ciudadano o ciudadana,
              tiene el derecho de formular su denuncia sobre cualquier delito, como estafa, robo, homicidio, violación,
              secuestro, posesión y tráfico de drogas, ilícitos ambientales, violencia de género y casos de corrupción,
              entre otros.
              <br><br> El Código Orgánico Penal Procesal (COPP) establece en su artículo 268 que la denuncia podrá ser
              verbal, es decir, que se levantará un acta en presencia de el o la denunciante, quien la firmará junto con
              el funcionario o funcionaria que la reciba; o escrita, es decir, que será firmada por el o la denunciante
              o por un apoderado o apoderada con facultades para hacerlo. Si el o la denunciante no puede firmar,
              estampará sus huellas dactilares.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- end download section -->

    <!-- end download section -->
    <div class="container-fluid py-5 bg-light">
      <div class="container py-4">
        <div class="heading_container">
          <h2>
            Información sobre denuncias
          </h2>
        </div>
        <div class="row pt-5">
          <div class="col-xl-3 mb-2">
            <div class="service-item rounded p-5 mb-4">
              <a href="centros-de-ayuda/denuncia1.php">
                <h4 class="mb-4 font-weight-bold">
                  <span class="d-block card-title-color">¿Cúales son tus derechos al denunciar?</span>
                </h4>
                <p class="m-0 text-dark mb-4">Conocer tus derechos evitará abusos e irregularidades por parte de las
                  autoridades encargadas de recibir tu denuncia...</p>
                <a href="centros-de-ayuda/denuncia1.php" class="card-btn">
                  Leer más
                </a>
              </a>
            </div>
          </div>
          <div class="col-xl-3 mb-2">
            <div class="service-item rounded p-5 mb-4">
              <a href="centros-de-ayuda/denuncia2.php">
                <h4 class="mb-4 font-weight-bold">
                  <span class="d-block card-title-color">¿Es necesario contar con pruebas?</span>
                </h4>
                <p class="m-0 text-dark mb-4">El testimonio de la persona que ha vivido o vive una situación de
                  violencia de género física y/o psíquica, aunque no haya otros testigos...</p>
                <a href="centros-de-ayuda/denuncia2.php" class="card-btn">
                  Leer más
                </a>
              </a>
            </div>
          </div>
          <div class="col-xl-3 mb-2">
            <div class="service-item rounded p-5 mb-4">
              <a href="centros-de-ayuda/denuncia3.php">
                <h4 class="mb-4 font-weight-bold">
                  <span class="d-block card-title-color">¿Qué es un órgano receptor de denuncia?</span>
                </h4>
                <p class="m-0 text-dark mb-4">Es un órgano del Poder Ciudadano que tiene por objetivo actuar en
                  representación del interés general y es responsable...</p>
                <a href="centros-de-ayuda/denuncia3.php" class="card-btn">
                  Leer más
                </a>
              </a>
            </div>
          </div>
          <div class="col-xl-3 mb-2">
            <div class="service-item rounded p-5 mb-4">
              <a href="centros-de-ayuda/denuncia4.php">
                <h4 class="mb-4 font-weight-bold">
                  <span class="d-block card-title-color">¿Qué datos debe de contener una denuncia?</span>
                </h4>
                <p class="m-0 text-dark mb-4">Los ciudadanos pueden formular sus denuncias sobre delitos tales como
                  estafa, robo, lesiones, homicidio, violación, secuestro...</p>
                <a href="centros-de-ayuda/denuncia4.php" class="card-btn">
                  Leer más
                </a>
              </a>
            </div>
          </div>
          <div class="col-xl-3 mb-2">
            <div class="service-item rounded p-5 mb-4">
              <a href="centros-de-ayuda/denuncia5.php">
                <h4 class="mb-4 font-weight-bold">
                  <span class="d-block card-title-color">Realizar seguimiento a una denuncia</span>
                </h4>
                <p class="m-0 text-dark mb-4">Una vez que ha quedado registrada tu denuncia, el seguimiento de las
                  denuncias, se puede realizar a través de llamadas...</p>
                <a href="centros-de-ayuda/denuncia5.php" class="card-btn">
                  Leer más
                </a>
              </a>
            </div>
          </div>
          <div class="col-xl-3 mb-2">
            <div class="service-item rounded p-5 mb-4">
              <a href="centros-de-ayuda/denuncia6.php">
                <h4 class="mb-4 font-weight-bold">
                  <span class="d-block card-title-color">¿Qué hacer si me culpan de algo que no hice?</span>
                </h4>
                <p class="m-0 text-dark mb-4">Cuando se llega al grado de acusar por un delito a una persona, es
                  importante que primero se evalúen cuáles fueron...</p>
                <a href="centros-de-ayuda/denuncia6.php" class="card-btn">
                  Leer más
                </a>
              </a>
            </div>
          </div>
          <div class="col-xl-3 mb-2">
            <div class="service-item rounded p-5 mb-4">
              <a href="centros-de-ayuda/denuncia7.php">
                <h4 class="mb-4 font-weight-bold">
                  <span class="d-block card-title-color">Consecuencias de presentar una denuncia falsa</span>
                </h4>
                <p class="m-0 text-dark mb-4">Una falsa denuncia enmarcada en un proceso legal es un delito consistente
                  en imputar hechos ilícitos a alguna persona con...</p>
                <a href="centros-de-ayuda/denuncia7.php" class="card-btn">
                  Leer más
                </a>
              </a>
            </div>
          </div>
          <div class="col-xl-3 mb-2">
            <div class="service-item-img rounded p-5 mb-4">
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