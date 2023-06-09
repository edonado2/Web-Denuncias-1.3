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

  <title>Artículo | Violencia de género en Latinoamérica: Estrategias para su prevención y erradicación</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style-violencia-de-genero-en-latinoamerica.css" rel="stylesheet" />
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
              Violencia de género en Latinoamérica: Estrategias para su prevención y erradicación
            </h1>
            <h4 class="my-3 font-weight-bold">Universidad del Zulia</h4>
            <p class="text-justify mt-5"> El género ha sido determinado social y culturalmente como la categoría que permite identificar lo femenino de lo masculino, y los roles que se establecen para cada sexo. De acuerdo al informe de la Organización Mundial de la Salud (OMS, 2013) el 35% de las mujeres del mundo han sido víctimas de violencia física y/o sexual por parte de su pareja o de violencia sexual por parte de otros sujetos distintos de ésta.</p>
            <p class="text-justify "> La Organización de las Naciones Unidas, ONU Mujeres (2017) reporta en informe de resultados globales, que en el mundo mujeres y niñas enfrentan acoso sexual y violencia en espacios públicos, en el transporte público, en las calles, lugares de recreación (parques), mercados, tanto en países en desarrollo como desarrollados, en sus diferentes zonas. En Latinoamérica, se han establecido políticas públicas, reformas legislativas, acciones y programas de organización social tanto públicas como privadas, con el fin de evaluar, monitorear así como establecer medidas y estrategias para la prevención y erradicación de la violencia contra la mujer.</p>
            <p class="text-justify"> No obstante, los reportes institucionales en los diferentes Estados de la región reflejan que la problemática aún persiste. En Ecuador, la encuesta nacional sobre relaciones familiares y violencia de género contra las mujeres, realizada por el Instituto Nacional de Estadísticas y Censo (INEC, 2019), reportó una violencia total nacional de 64,9%, urbano 65,7% y rural 62,8%.</p>
        
            <div class="d-flex justify-content-center mt-5">
              <img src="../images/articulo1-2.jpg" alt="" class="img-modifier">
            </div>
            <div class="d-flex justify-content-center">
              <p class=" leyenda">La violencia de género, una lacra que golpea a las mujeres de toda América Latina</p>
            </div>
          

          <p class="text-justify mt-5"> En Colombia, el Boletín Epidemiológico (2019) Violencia contra las mujeres, emitido por el Instituto Nacional de Medicina Legal y Ciencias Forenses (INMLCF, 2019), demuestra dentro de la violencia fatal contra la mujer 138 homicidios, como violencia no fatal intrafamiliar 2.471, presunto delito sexual 3.263, violencia interpersonal 5.501, violencia de pareja 5,877. En la realidad venezolana, la obtención de datos sobre la Violencia contra las Mujeres continúa siendo una limitación grave para la comprensión del problema, así como para diseñar estrategias asertivas, para conocer su magnitud y alcance, sin embargo, el Ministerio Público, 2007-2008 reporta en porcentaje de actos violentos un total de 1.066,70% (Marcano y Palacios, 2017).</p>

          <p class="text-justify"> En Perú, la Encuesta Demográfica y de Salud Familiar (Instituto Nacional de Estadística e Informática [INEI], 2018), reporta que “el 63,2% de mujeres fueron víctimas de violencia ejercida alguna vez por el esposo o compañero, siendo mayor en las residentes en el área urbana (63,3%) y en aquellas mujeres con educación secundaria (69,4%)” (p.287). A nivel de México, la violencia contra la mujer registra un 66,1% (Instituto Nacional de Estadísticas y Geografía [INEGI], 2017), en este caso las mujeres han sufrido al menos un incidente de violencia emocional, económica, física, sexual o discriminación a lo largo de su vida en al menos un ámbito así como ejercida por cualquier agresor.</p>

          <p class="text-justify"> Cerrando con Argentina, donde el Registro único de casos de violencia contra las mujeres en los periodos 2013-2018, refleja la violencia contra las mujeres con edad comprendida de 18 años y más, al igual que mantenían vínculo con su agresor en un 67,9%, de acuerdo con el Instituto Nacional de Estadísticas y Censo, República Argentina (INDEC, 2019) a través de la Dirección Nacional de Estadísticas Sociales y de Población.</p>

          <p class="text-justify"> Respecto a ello, las cifras reportadas a través de los años por los organismos internacionales deben ser atendidas con carácter prioritario. Aun cuando los Estados de la región han realizado un importante trabajo, para garantizar y resguardar los derechos de mujeres, niñas y adolescentes, se recibe de manera permanente información alarmante sobre Estados que enfrentan desafíos, dificultades, para dar una respuesta efectiva al problema social de discriminación, desigualdad y violencia contra mujeres, niñas y adolescentes (Comisión Interamericana de Derechos Humanos [CIDH], 2019).</p>

          <div class="heading_container py-5">
            <h2>ESTRATEGIAS PARA LA PREVENCIÓN Y ERRADICACIÓN DE LA VIOLENCIA CONTRA LA MUJER EN LATINOAMÉRICA</h2>
        </div>

        <div class="d-flex justify-content-center">
          <img src="../images/articulo1-3.jpg" alt="" class="img-modifier">
        </div>
        <div class="d-flex justify-content-center">
          <p class=" leyenda">Estrategias para la prevención de la violencia contra la mujer en Latinoamérica</p>
        </div>

          <p class="text-justify mt-5"> La situación de la violencia contra la mujer a nivel mundial, preocupa a todos los sujetos involucrados, no sólo al Estado y Organismos Internacionales, sino también a la sociedad en general, las consecuencias que provoca son de tal magnitud que los costos para los gobiernos y para las víctimas causan daños muchas veces irreparables; ningún tipo de violencia es aceptable, sin embargo, la violencia de género, por los graves daños que esta genera (físicos, biológicos, psicológicos, sociales, culturales, entre otros) ha sido motivo de alertas y llamados a su prevención, sanción y erradicación.</p>

          <p class="text-justify">  Históricamente, se ha considerado que la mujer ha estado limitada en sus derechos, libertades, decisiones y oportunidades, en el ámbito social, económico, político, y cultural; las repercusiones del Covid-19 le han afectado en el presente y le afectarán en el futuro desde muchos aspectos (Rodríguez, 2020). En este sentido, De Monserrat (2008) señala que: “no cabe sino afirmar que la violencia de que es objeto la mujer, a través de sus diversas manifestaciones, es un asunto prioritario para los Estados, para la sociedad civil, y debería constituirse para cada hombre y mujer” (p.1046).</p>

          <p class="text-justify"> De ello deriva la obligación impuesta a los Estados, plasmada en los diferentes instrumentos internacionales; de tomar todas las acciones pertinentes, que involucran revisar las leyes cuyos contenidos sean discriminatorios en el ámbito social, cultural, y laboral. Enfocados al cambio de conciencia, conductas y pensamientos basados en estos factores de desigualdad.</p>

          <p class="text-justify"> Por tanto, la principal propuesta de solución para la prevención y erradicación de este problema, es emplear estrategias en beneficio de las mujeres, que fomenten su acceso a la educación, trabajo y participación ciudadana. Así pues, es relevante examinar las estrategias adoptadas en la región, que van desde el estudio y diagnóstico de la situación, legislación, así como políticas públicas en los diferentes ámbitos.</p>
          
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