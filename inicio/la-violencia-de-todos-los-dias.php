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

  <title>Artículo | Maltrato: la violencia de todos los días</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style-la-violencia-de-todos-los-dias.css" rel="stylesheet" />
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
              Maltrato: la violencia de todos los días
            </h1>
            <h4 class="my-3 font-weight-bold">Revista ¿Cómo ves?</h4>
            <p class="text-justify mt-5"> Cuando pensamos en violencia, por lo general la asociamos con la rudeza, la brutalidad y el crimen de los que nos informan los medios. Sin embargo, muchas veces pasamos por alto otros tipos de violencia, más cercanos y cotidianos. Y aunque aquellos extremos sean un motivo real de preocupación, que incluso puede estar afectando nuestra vida y actividades diarias, estas otras formas de violencia son igualmente perjudiciales, al grado de situarse como uno de los posibles factores que desencadenan la violencia mayor.</p>
            <p class="text-justify "> De acuerdo con la Organización Mundial de la Salud (OMS), "la violencia es una de las principales causas de muerte, a nivel mundial, para las personas de entre 15 y 44 años". A la violencia se le atribuyen, en promedio, el 14% de las defunciones de varones y el 7% de mujeres. Y por cada persona fallecida como resultado de la violencia extrema, existen muchas otras que padecen consecuencias derivadas de violencia física o psicológica en forma de abuso, maltrato o intimidación infantil, violencia doméstica y de género, acoso laboral y discriminación social.</p>
        
            <div class="d-flex justify-content-center mt-5">
              <img src="../images/articulo2-2.jpg" alt="" class="img-modifier">
            </div>
            <div class="d-flex justify-content-center">
              <p class=" leyenda">Alerta y conducta ante signos de maltrato</p>
            </div>
          

          <p class="text-justify mt-5"> El origen de las conductas violentas en los humanos ha sido un tema importante de investigación en filosofía, sociología, biología, psicología y psiquiatría. En fechas más recientes, se han sumado a este esfuerzo la neurobiología y la neurofisiología, que buscan en el cerebro las claves para estudiar y prevenir la violencia. Con ayuda de estas disciplinas, junto con novedosas herramientas que permiten obtener imágenes cerebrales, se han conseguido avances, pero todavía hay muchas incógnitas sobre este fenómeno. Una de ellas es si la violencia es inherente a los humanos, o se adquiere culturalmente.</p>

          <p class="text-justify"> Así, por ejemplo, en el siglo XVIII, Jean-Jacques Rousseau afirmaba que el hombre es bueno por naturaleza y que la "civilización artificial" es la que lo corrompe. Por el contrario, pensadores como Thomas Hobbes, Sigmund Freud y el premio Nobel de Medicina Konrad Lorenz han sostenido que el humano es naturalmente agresivo y egoísta, y esto sólo se contiene con la cultura. Esta controversia aún no ha podido zanjarse, pero muchas evidencias apuntan a que, como siempre, parece existir la doble influencia de la naturaleza y el medio.</p>

          <p class="text-justify"> Para bien y para mal La doctora Feggy Ostrosky, directora del Laboratorio de Neuropsicología y Psicofisiología de la Facultad de Psicología de la UNAM (FPSI-UNAM), y experta en las bases biológicas de la violencia humana, señala que "nacemos con una predisposición a la agresión, para posteriormente aprender cuándo podemos y debemos expresar o inhibir estas tendencias". Agrega que la perspectiva biológica nos indica que "la agresión es inherente al ser humano como medio de supervivencia"; un comportamiento con fines de adaptación, seleccionado durante la evolución.</p>

          <p class="text-justify"> Las bases biológicas de la conducta agresiva están reguladas por ciertas estructuras cerebrales y por los mensajeros neuronales: las hormonas y los neurotransmisores. Feggy Ostrosky precisa que estos mensajeros no producen por sí mismos la conducta agresiva, por lo que aquí entra la importancia del aprendizaje social en la modulación o en la manifestación de esta conducta.</p>

          <p class="text-justify"> La agresividad no necesariamente es violencia. En palabras de la doctora Ostrosky, la agresión incluso puede ser positiva, cuando se trata de una "reacción espontánea y breve para protegernos de algún peligro que nos acecha". En este sentido, la agresión "positiva" cumple con una importante función biológica y evolutiva. Por el contrario, la agresión negativa, o violencia, según la define la OMS, es "el uso intencional de la fuerza física o del poder, en los hechos o como amenaza, en contra de uno mismo, de otra persona o de un grupo o comunidad, y que tiene como resultado una alta probabilidad de producir, lesiones, muerte, daño psicológico, problemas en el desarrollo o privaciones".</p>

        <div class="d-flex justify-content-center">
          <img src="../images/articulo2-3.jpg" alt="" class="img-modifier">
        </div>
        <div class="d-flex justify-content-center">
          <p class=" leyenda">Consecuencias del maltrato en la vida adulta</p>
        </div>

          <p class="text-justify mt-5"> Además del miedo, que nos obliga a enfrentar la conocida disyuntiva de huir o atacar, el enojo es una emoción que dispara nuestra agresión. Enojarse de vez en cuando es totalmente natural; cierta cantidad de enojo es necesaria para la supervivencia, y bien canalizada nos puede impulsar a actuar asertivamente para resolver un problema. No obstante, el enojo crónico es perjudicial y a veces oculta otras emociones. Si el enojo pasa de ser un sentimiento ocasional a formar parte de la personalidad, puede convertirse en hostilidad. Igualmente, cuando no logramos "sacar" o expresar nuestro enojo de manera saludable por medio de la comunicación, y preferimos ocultarlo o tratar de suprimirlo, puede transformarse en agresión pasiva, esto es, una conducta donde los sentimientos de agresión no se expresan abiertamente, sino a través del resentimiento, la testarudez y el culpar a otros para evitar la propia responsabilidad.</p>

          <p class="text-justify">  Hay que subrayar la importancia de que el enojo se exprese de manera saludable, pues si es extremo e incontrolado puede desencadenar ira. Y esta emoción excesiva fácilmente conduce a la violencia.</p>
          
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