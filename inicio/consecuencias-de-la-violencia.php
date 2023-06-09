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

  <title>Artículo | ¿Cuáles son las consecuencias de la violencia en la crianza?</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style-consecuencias-de-la-violencia.css" rel="stylesheet" />
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
              ¿Cuáles son las consecuencias de la violencia en la crianza?
            </h1>
            <h4 class="my-3 font-weight-bold">UNICEF para cada infancia</h4>
            <p class="text-justify mt-5"> En mayor o menor medida, la violencia siempre deja huellas en niños, niñas y adolescentes, pero ¿de qué forma los afecta cada tipo de violencia?</p>

            <div class="heading_container py-5">
              <h2>¿QUÉ LE PASA A NIÑOS, NIÑAS Y ADOLESCENTES CUANDO RECIBEN CASTIGOS FÍSICOS?</h2>
          </div>  

          <p class="text-justify"> En un primer momento experimentan miedo o terror frente al golpe. Los niños, niñas y adolescentes al recibir castigos físicos sienten el temor llevado al grado máximo, es decir, terror. Esto ocurre minutos o segundos antes de recibir el golpe, cuando anticipan lo que va a acontecer.</p>

          <p class="text-justify"> Después del golpe no solo sienten un dolor físico, sino emocional. El sentimiento de impotencia surge luego, como resultado del dolor emocional que resulta de no poder modificar la ira, el enojo o la frustración que siente su madre, padre o cuidador. Niños, niñas y adolescentes sienten que nada de lo que puedan hacer en ese momento hará cambiar la opinión de las personas adultas a su cargo sobre él o ella, o sobre lo ocurrido.</p>

          <p class="text-justify"> Para sobreponerse de esta experiencia, niños, niñas y adolescentes desarrollan mecanismos de adaptación a la violencia, como la obediencia extrema o comportamientos violentos.</p>

          <p class="text-justify"> En cualquiera de los dos casos se ubican en algún lugar del círculo de la violencia: víctima o agresor. Estas experiencias trascienden el mundo familiar y se amplían a la escuela y la comunidad. Niños, niñas y adolescentes aprenderán que los problemas deben enfrentarse con violencia y podrá aplicar esta enseñanza a otros ámbitos de su vida. La persistencia de estas conductas acaba generando una sociedad violenta, que utiliza estos mecanismos para resolver los conflictos.</p>

          <div class="heading_container py-5">
            <h2>¿QUÉ LE PASA A NIÑOS, NIÑAS Y ADOLESCENTES CUANDO SUS PADRES O CUIDADORES LOS HUMILLAN O INSULTAN?</h2>
        </div>

        <p class="text-justify"> Los seres humanos construimos nuestro pensamiento a partir del lenguaje. En este proceso, los vínculos familiares son fundamentales al momento de ir aprendiendo palabras y construyendo significados.</p>

        <p class="text-justify"> Como esto se da en un contexto afectivo, niños, niñas y adolescentes confían y creen en lo que sus padres y cuidadores dicen. Por lo tanto, si se usan palabras humillantes para educarlos o ponerles límites, los hijos e hijas pensarán que estas palabras realmente los definen como personas.</p>

        <p class="text-justify"> Aunque algunas madres y algunos padres creen que insultar no es igual que golpear, las palabras fuertes y humillantes generan los mismos sentimientos de dolor emocional, frustración e impotencia que el castigo físico en las personas.</p>

        <p class="text-justify"> La violencia física o psicológica no enseña a “portarse bien”, sino a evitar el castigo. Por ese camino, los niños, niñas y adolescentes solo aprenden qué tienen que hacer para no enojar a la persona adulta que incurre en estas prácticas.</p>

        <p class="text-justify"> Además, la exposición a situaciones de violencia puede alterar el desarrollo fisiológico del cerebro y repercutir en el crecimiento físico, cognitivo, emocional y social del niño, niña o adolescente.</p>


        
          
          </div>
          <!-- <div class="col-lg-4  mx-auto" >
            <div class="client_container">
              <p class="font-weight-bold text-link"> Páginas que te puedan interesar</p>
              <a class="link-side" href="violencia-de-genero.html">Violencia de Género</a>
              <a class="link-side" href="violencia-fisica.html">Violencia Física</a>
              <a class="link-side" href="violencia-psicologica.html">Violencia Psicológica</a>
              <a class="link-side" href="violencia-sexual.html">Violencia Sexual</a>
              <a class="link-side" href="hostigamiento.html">Hostigamiento</a>
              <a class="link-side" href="violencia-domestica.html">Violencia  Doméstica</a>
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