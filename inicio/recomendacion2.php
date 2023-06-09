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

  <title>Recomendación | ¿QUÉ HACER SI SABES DE UN CASO DE VIOLENCIA CONTRA UN NIÑO O NIÑA?</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style-recomendacion2.css" rel="stylesheet" />
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
                ¿QUÉ HACER SI SABES DE UN CASO DE VIOLENCIA CONTRA UN NIÑO O NIÑA?
            </h1>
            <p class="text-justify mt-5">La violencia infantil puede estar dentro de nuestro entorno familiar, es importante aprender a reconocerla y tomar medidas adecuadas.</p>

            <div class="heading_container py-5">
                <h2>1. REALIZAR UN DIAGNÓSTICO</h2>
            </div>

            <p class="text-justify "> En primer lugar es importante realizar un análisis de la situación, identificar el tipo de abuso del que fue víctima la niña o el niño. Además, es muy importante utilizar algunos pasos que permiten tener un panorama aún más claro sobre su situación:</p>

            <p class="text-justify"><span class="font-weight-bold">• </span>Pruebas de laboratorio, para identificar lesiones.</p>


          <p class="text-justify"><span class="font-weight-bold">• </span>Historial clínico del niño o niña.</p>

          <p class="text-justify"><span class="font-weight-bold">• </span>Observa y analiza el comportamiento del infante con su círculo social.</p>

          <p class="text-justify"><span class="font-weight-bold">• </span>Brinda confianza y seguridad al niño o niña para que se sienta seguro y pueda contarte lo que le sucedió. Mantén la calma y escucha con atención todo lo que tenga que decir. No emitas juicios, ni contagies miedos, no amenaces, consuela y protege.</p>

          <div class="heading_container py-5">
            <h2>2. NO RE-VICTIMICE AL NIÑO O NIÑA</h2>
        </div>

        <p class="text-justify"> Una reacción normal frente a un caso de violencia es el pánico que puede abrumar a muchos adultos, el tratar de lograr una respuesta inmediata obliga a tomar una reacción agresiva frente al niño o niña, es importante recordar que el infante ha sido quién se encuentra en una situación crítica, donde recibió algún tipo de agresión física o psicológica, por esa razón siempre es importante reconocer frente al niño o niña que él o ella no tienen la culpa, no se debe crear sentimiento de error o falta, ya que esto es perjudicial.</p>

        <p class="text-justify"> Siempre recuerda repetir palabras que alivien su situación “Tranquilo”; “no fue tu responsabilidad”; “todo va a estar bien”.</p>

        <div class="heading_container py-5">
            <h2>3. BRINDALE ATENCIÓN</h2>
        </div>

        <p class="text-justify"> Un niño o niña que atraviesa por alguna situación de violencia necesita el apoyo de todos sus seres queridos. Es importante brindarle la atención suficiente para ayudarlo en su estado emocional. Por ese motivo presta mucha atención a su comportamiento, sus reacciones y actitud frente a su círculo social, familia, amigos. Identifica escenarios que lo ponen de mal humor o le generan preocupación, la escuela, el internet, algunos miembros de la familia, todo puede expresar algún sentimiento ocasionado por la situación que está atravesando el infante.</p>

        <p class="text-justify"> Constantemente pregúntale sobre ¿Cómo se siente?, si necesita ayuda, en el momento que el niño o niña sienta la suficiente confianza podrá tener una conversación y expresar su temor.</p>

        <div class="heading_container py-5">
            <h2>4. BUSQUE ASESORAMIENTO DE PROFESIONALES</h2>
        </div>

        <p class="text-justify"> Finalmente, no descartes la opción de acudir a profesionales, de denunciar el maltrato, las autoridades especializadas en el maltrato infantil son un grupo de personas que tienen amplia experiencia para atender casos de violencia, diferentes departamentos podrán garantizar su seguridad, atención y la investigación necesaria para estudiar su caso.</p>

        <p class="text-justify"> Constantemente pregúntale sobre ¿Cómo se siente?, si necesita ayuda, en el momento que el niño o niña sienta la suficiente confianza podrá tener una conversación y expresar su temor.</p>

        <div class="heading_container py-5">
            <h2>EN CONCLUSIÓN</h2>
        </div>

        <p class="text-justify"> Como personas adultas es importante aprender a reconocer un caso de violencia infantil y tomar las decisiones correctas. Son 4 pasos que permitirán llevar una situación de agresión de una manera acertada. Primero, realiza un diagnóstico del niño o niña, observa su comportamiento con diferentes personas y lugares, esto nos dará un breve conocimiento de la situación; segundo, no re victimices al infante, la situación es muy complicada , lo más importante es no hacerlo sentir culpable de lo sucedido; tercero, bríndale mucha atención, su estado emocional está muy sensible, necesita de apoyo incondicional, el tratar de crear buenos momentos permitirá que el niño o niña adquiera confianza y pueda aceptar tu ayuda. Finalmente, de ser necesario acude a un profesional, una vez realizados los tres primeros pasos podrás identificar si la situación necesita ayuda de un psicólogo experto, la salud mental de un niño o niña necesita ser estable para que pueda desarrollar todo su potencial. Recuerda el silencio es cómplice de la violencia, denuncia y ayúdanos a cuidar de la niñez ecuatoriana.</p>

          
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