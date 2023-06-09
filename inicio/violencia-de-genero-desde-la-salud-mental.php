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

  <title>Artículo | Violencia De Género Desde La Salud Mental</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style-violencia-de-genero-desde-la-salud-mental.css" rel="stylesheet" />
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
              Violencia De Género Desde La Salud Mental
            </h1>
            <h4 class="my-3 font-weight-bold">Clínica San Pablo S.A</h4>
            <p class="text-justify mt-5"> “Según la ONU Mujeres en su espacio de hechos y cifras: Acabar con la violencia contra mujeres y niñas reporta que en el mundo aproximadamente el 35% de las mujeres ha sido víctima de algún tipo de violencia física y/o sexual en algún momento de su vida”.</p>
            <p class="text-justify "> En la gran mayoria de los casos, el estado emocional de las personas que han vivido algún tipo de maltrato o abuso, ya sea mental, físico o sexual, se afecta a tal punto que la víctima de estas situaciones puede llegar a experimentar algún trastorno o enfermedad mental. La víctima usualmente se sienta afligida, vulnerada y presenta una baja autoestima: por lo tanto, hablar abiertamente de su situación se les dificulta. Incluso, en algunas ocasiones, la persona puede sentirse avergonzada o manifestar ser culpable de su circunstancia producto del trauma psicológico. En este sentido, es clave que las personas que han sufrido de algún tipo de violencia tengan acceso a una atención integral por parte de un profesional de la salud mental. Igualmente, que se les facilite espacios de confianza, de respeto y de seguridad. Esto con el objetivo de que la persona se sienta comoda, protegida y se logre una recuperación efectiva.</p>
            <p class="text-justify"> Los trastornos más comunes en las personas que son victimas de violencia son: la depresión, la ansiedad, el estrés post-traumático, los ataques de pánico, el abuso de alcohol, el abuso de sustancias psicoactivas, entre otros. En los casos más extremos se puede llegar a evidenciar comportamientos suicidas o episodios psicóticos. En este sentido, para la recuperación de la persona víctima de violencia de género es importante la detección temprana de la situación, pues le permitirá una atención en salud mental oportuna y el acceso a un tratamiento adecuado. La detección temprana se logra con un equipo de profesionales que tengan la experiencia en el manejo de está situación, al igual que a tráves de una adecuada red de apoyo de la persona.</p>
        
            <div class="d-flex justify-content-center mt-5">
              <img src="../images/articulo3-2.jpg" alt="" class="img-modifier">
            </div>
            <div class="d-flex justify-content-center">
              <p class=" leyenda">Red de ayuda para las personas que son victimas de violencia </p>
            </div>
          

          <p class="text-justify mt-5"> La red de apoyo de una víctima de violencia de género es fundamental, ya que la persona se debe sentir comoda, protegida y escuchada. Inmediatamente una persona indica que está sufriendo de violencia de genero, lo primero que se debe hacer es construir con ella lazos de confianza; la persona debe sentir que se puede expresar sin ser juzgada ni discriminada. También se le debe dar credibilidad a sus emociones. Muchas veces la persona no busca ayuda por miedo a lo que los demás piensen de su situación, a la discriminación que pueden sufrir, o en otros casos, porque cuando expresa su situación nadie le cree o le resta importancia a lo sucedido. Las víctimas, sean mujeres o hombres, merecen respeto, acceso a una atención oportuna y apoyo psicológico. No ignoremos que necesitan ayudan y apoyo.</p>

          
          
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