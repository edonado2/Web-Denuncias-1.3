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

  <title>Tipos de Violencia | Violencia Sexual</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style-violencia-sexual.css" rel="stylesheet" />
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
                  Violencia Sexual
                </h1>
                <div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <img src="../images/violencia-sexual.jpg" class="img-modifier" alt="...">
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
            <p class="text-justify"> Cuando hablamos de violencia sexual, nos referimos a malos tratos sexuales, o sea, a relaciones sexuales no consentidas, forzadas o impuestas al otro. También se aplica a prácticas sexuales humillantes, de vejación o que ocasionen dolencias físicas o riesgo para la vida, incluso si se llevan a cabo entre adultos que consienten.</p>
          <p class="text-justify"> Este tipo de acciones violentas pueden realizarse con el propio cuerpo o con objetos. Pueden ocurrir dentro o fuera de una relación afectiva o familiar, y suelen ir acompañados de otras formas de maltrato, como el psicológico, verbal y emocional.</p>
          <p class="text-justify"> El maltrato hacia la mujer, o hacia los homosexuales o transgéneros también es una forma de violencia sexual, que usualmente va acompañada de violaciones “correctivas” (sobre todo en el caso de los homosexuales) o de humillaciones, escarnio y otras formas de trauma emocional, físico y psicológico.</p>
        
          <div class="heading_container py-5">
            <h2>MANERAS DE RESPONDER AL CONTACTO SEXUAL NO DESEADO</h2>
          </div>
          <p class="mt-3 mb-4 text-justify"> Si estás bajo presión para a tener una actividad sexual que no desea, estos consejos de RAINN (Red Nacional de Violación, Abuso e Incesto, por sus siglas en inglés) pueden ayudarle a salirse de forma segura de la situación.
          </p>

          <p class="mt-3 mb-4 text-justify"><span class="font-weight-bold">• Recuerde que no es su culpa.</span> No tiene obligación de actuar de una manera en la que no está de acuerdo. La persona que la está presionando es la responsable.</p>

          <p class="mt-3 mb-4 text-justify"><span class="font-weight-bold">• Confíe en sus instintos. </span> Si algo no parece estar bien o le incomoda, confíe en lo que siente.</p>

          <p class="mt-3 mb-4 text-justify"><span class="font-weight-bold">• Está bien dar excusas o mentir para que pueda salirse de la situación. </span>No se sienta mal de hacerlo. Puede decirlo que se sintió enferma de repente, tiene que atender una emergencia familiar o que solo necesita ir al baño. Si puede, llame a un amigo.</p>

          <p class="mt-3 mb-4 text-justify"><span class="font-weight-bold">• Busque una vía de escape. </span> Busque la puerta o ventana más cercana para que pueda salir rápidamente. Si hay gente cerca, piense cómo llamar su atención. Piense a dónde ir después. Haga lo que sea para estar a salvo.</p>

          <p class="mt-3 mb-4 text-justify"><span class="font-weight-bold">• Piense con anticipación acerca de una palabra o código especial con un amigo o familiar.</span> Así, puede llamarlos y decirles la palabra, código o oración si se encuentra en una situación en la que no quiere estar.</p>

          <p class="mt-3 mb-4 text-justify">No importa lo que pase. Nada de lo que haya hecho o dicho causó la agresión. No importa lo que haya estado usando, bebiendo, o haciendo, incluso si estaba coqueteado o besando, no es su culpa. Su comportamiento antes, durante y después del incidente no cambia el hecho de que el perpetrador es el culpable.</p>

          
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
              <img src="../images/frase2.jpg" class="img-side pb-5" alt="">
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
              <a href="../denuncia">
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