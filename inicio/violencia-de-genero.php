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

  <title>Tipos de Violencia | Violencia de Género</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style-violencia-de-genero.css" rel="stylesheet" />
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
                  Violencia de Género
                </h1>
                <div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <img src="../images/image2.jpg" class="img-modifier" alt="...">
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
            <p class="text-justify"> La violencia de género es la violencia que ejerce una persona sobre otra solo por su género. Las acciones violentas son todas las que afectan de forma negativa la identidad, la sexualidad y libertad reproductiva, la salud física y mental y el bienestar social de una persona.</p>
          <p class="text-justify"> En muchas legislaciones, el concepto de violencia de género se aplica a la violencia ejercida hacia las mujeres. Este tipo de violencia incluye dinámicas de dominación, amenazas y la privación arbitraria de las libertades políticas y civiles en el ámbito social, doméstico, político o laboral.</p>
          <p class="text-justify"> Entre los actos más aberrantes de violencia de género están: el infanticidio femenino, las violaciones, la prostitución forzada, los abortos en función del sexo del no nato, la violencia contra las prostitutas, la mutilación genital, el tráfico de personas, el acoso y hostigamiento dentro de organizaciones, la violencia doméstica.</p>

          <div class="heading_container py-5">
              <h2>CAUSAS DE LA VIOLENCIA DE GÉNERO</h2>
          </div>
          <h5 class="font-weight-bold">• Estereotipos de género. </h5> 
          <p class="mt-3 mb-4 text-justify">La diferencia de roles que se impone a los individuos según su género genera actitudes de discriminación e intolerancia dentro de los diferentes ámbitos de una sociedad. Este trato desigual que se da hacia los individuos según su género puede traer situaciones de violencia.</p>

          <h5 class="font-weight-bold">• Prejuicios culturales.</h5> 
          <p class="mt-3 mb-4 text-justify"> La ideología machista prolifera la idea de la superioridad masculina y la primacía sobre las personas de otro género. El machismo utiliza la violencia como un mecanismo de control, estos patrones de conducta suelen ser transmitidos de generación en generación.</p>

          <h5 class="font-weight-bold">• Deseos de poder y dominación. </h5> 
          <p class="mt-3 mb-4 text-justify">Individuos del género masculino ejercen violencia sobre personas de otro género para afianzar su autoridad y su creencia de superioridad.</p>

          <div class="heading_container py-5">
            <h2>CONSECUENCIAS DE LA VIOLENCIA DE GÉNERO</h2>
        </div>

        <h5 class="font-weight-bold">• En la salud física. </h5> 
          <p class="mt-3 mb-4 text-justify"> En la salud física. Puede producir lesiones físicas leves o graves y hasta la muerte de la víctima. Principales lesiones: quemaduras, traumatismos, contusiones, empeore de enfermedades preexistentes.</p>

          <h5 class="font-weight-bold">• En la salud mental. </h5>
          <p class="mt-3 mb-4 text-justify"> Puede producir daños emocionales irreversibles en la víctima. Principales consecuencias: baja autoestima, inestabilidad emocional, ansiedad, trastornos alimenticios o de sueño, estrés postraumático, depresión, intento de suicidio.</p>

          <h5 class="font-weight-bold">• En la salud reproductiva. </h5>
          <p class="mt-3 mb-4 text-justify"> Las relaciones sexuales forzadas pueden traer como consecuencia enfermedades de trasmisión sexual, embarazos no deseados. La violencia en mujeres embarazadas puede llevar a abortos espontáneos.</p>

          <h5 class="font-weight-bold">• En la salud social. </h5> 
          <p class="mt-3 mb-4 text-justify"> Puede producir aislamiento social de la víctima, deterioro en las relaciones sociales. Una de las consecuencias de la violencia doméstica es la exposición de niños y niñas de la familia a situaciones de violencia.</p>

          </div>
          <div class="col-lg-4 mx-auto" >
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