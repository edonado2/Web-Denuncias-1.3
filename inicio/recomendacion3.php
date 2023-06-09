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

  <title>Recomendación | ¿CÓMO PUEDO AYUDAR A UNA VÍCTIMA DE VIOLENCIA FAMILIAR?</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style-recomendacion3.css" rel="stylesheet" />
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
                ¿CÓMO PUEDO AYUDAR A UNA VÍCTIMA DE VIOLENCIA FAMILIAR?
            </h1>
            <p class="text-justify mt-5">Nueve consejos para ayudar a alguien en esta situación vulnerable:</p>

            <div class="heading_container py-5">
                <h2>1. DEDÍCALE TIEMPO</h2>
            </div>

            <p class="text-justify "> Si decides acercarte a una víctima de violencia, hazlo durante un momento de calma. Involucrarte cuando los ánimos estén muy agitados puede poner a esa persona en peligro. Asegúrate de reservar tiempo en caso de que la víctima decida abrirse. Si la persona decide revelar años de miedo y frustración acumulados no puedes finalizar la conversación porque tienes otro compromiso.</p>

            <div class="heading_container py-5">
                <h2>2. INICIA UNA CONVERSIÓN</h2>
            </div>

            <p class="text-justify "> Puedes mencionar el tema de la violencia familiar diciendo “Estoy preocupado por ti porque …” o “Estoy preocupado por tu seguridad …” o “He notado algunos cambios que me preocupan …” Tal vez has visto a la persona usando ropa para cubrir moretones o notado que de repente se ha vuelto inusualmente callada(o) y retraída(o). Ambos pueden ser signos de violencia.</p>

            <p class="text-justify "> Hazle saber a esa persona que serás discreto sobre cualquier información. No intentes forzar a la persona a abrirse; deja que la conversación se desarrolle a un ritmo cómodo.Tómalo con calma. Es importante hacerle saber que estás disponible y que le comprendes.</p>

            <div class="heading_container py-5">
                <h2>3. ESCUCHA SIN JUZGAR</h2>
            </div>

            <p class="text-justify "> Si la persona decide hablar, escucha su historia sin juzgarla, ofrécele consejos o sugiere soluciones. Lo más probable es que si escuchas activamente, la persona te diga exactamente lo que necesita. Solo dale la oportunidad de hablar.</p>

            <p class="text-justify "> Puedes hacer preguntas aclaratorias pero, principalmente, deja que la persona exprese sus sentimientos y miedos. Puedes ser la primera persona en la que la víctima ha confiado.</p>

            <div class="heading_container py-5">
                <h2>4. APRENDE LAS SEÑALES DE ADVERTENCIA</h2>
            </div>

            <p class="text-justify "> Muchas personas intentan encubrir la violencia por diversas razones, conocer las señales de advertencia es muy importante para poder ayudarlas:</p>

            <p class="text-justify font-weight-bold mt-4">• Signos físicos</p>
            <p class="text-justify px-3">Ojos morados</p>
            <p class="text-justify px-3">Labios rotos</p>
            <p class="text-justify px-3">Marcas rojas o moradas en el cuello</p>
            <p class="text-justify px-3">Moretones en los brazos</p>
            <p class="text-justify font-weight-bold mt-4">• Signos emocionales </p>
            <p class="text-justify px-3">Baja autoestima</p>
            <p class="text-justify px-3">Se disculpa demasiado</p>
            <p class="text-justify px-3">Temerosa(o)</p>
            <p class="text-justify px-3">Cambios en los patrones de sueño o alimentación</p>
            <p class="text-justify px-3">Ansiosa(o) o nerviosa(o)</p>
            <p class="text-justify px-3">Abuso de sustancias</p>
            <p class="text-justify px-3">Síntomas de depresión</p>
            <p class="text-justify px-3">Hablar de suicidio</p>

            <p class="text-justify font-weight-bold mt-4">• Señales de comportamiento</p>
            <p class="text-justify px-3">Volverse retraída(o) o distante</p>
            <p class="text-justify px-3">Cancelar reuniones en el último minuto</p>
            <p class="text-justify px-3">Llegar tarde a menudo</p>
            <p class="text-justify px-3">Privacidad excesiva con respecto a su vida personal</p>
            <p class="text-justify px-3">Aislarse de amigos y familiares</p>


          <div class="heading_container py-5">
            <h2>5. CREE A LA VÍCTIMA</h2>
        </div>

        <p class="text-justify"> Debido a que la violencia familiar tiene más que ver con el control que con la ira, a menudo la víctima es la única que ve el lado oscuro del perpetrador. Muchas veces, la gente se sorprenden al saber que una persona que conocen podría cometer actos de violencia. En consecuencia, las víctimas a menudo sienten que nadie les creería si contaran sobre la violencia que viven. Cree la historia de la víctima y díselo. Para una víctima, tener a alguien que sepa la verdad puede brindarle una sensación de esperanza y alivio.</p>


        <div class="heading_container py-5">
            <h2>6. VALIDAR LOS SENTIMIENTOS DE LA VÍCTIMA</h2>
        </div>

        <p class="text-justify"> No es inusual que las víctimas expresen sentimientos contradictorios sobre su pareja y su situación. Estos sentimientos pueden variar entre: culpa y enojo, esperanza y desesperación, amor y miedo</p>

        <p class="text-justify"> Si deseas ayudar, es importante que valides sus sentimientos haciéndole saber que tener estos pensamientos conflictivos es normal. Pero también es importante que confirmes que la violencia no está bien y que no es normal vivir con miedo a ser atacado físicamente. Es posible que algunas víctimas no se den cuenta de que su situación es anormal porque no tienen otros modelos de relaciones y se han acostumbrado gradualmente al ciclo de violencia. Díle a la víctima que la violencia no es parte de las relaciones saludables. Sin juzgar, hazle saber que su situación es peligrosa y que te preocupas por su seguridad.</p>

        <div class="heading_container py-5">
            <h2>7. OFRECE AYUDA Y SOPORTE</h2>
        </div>

        <p class="text-justify"> Ayuda a la víctima a encontrar apoyo y recursos. Busca números de teléfono para refugios, servicios sociales, policía, abogados, consejeros o grupos de apoyo. También puedes ayudarle a obtener información sobre cualquier ley relacionada con órdenes de protección/órdenes de restricción e información de custodia de menores.</p>

        <p class="text-justify"> Si la víctima te pide que hagas algo específico y estás está dispuesta(o) a hacerlo, no dudes en ayudar. Si no puedes hacerlo, intenta encontrar otras formas de satisfacer la necesidad. Identifica sus fortalezas para que encuentre la motivación para ayudarse a si misma(o).</p>

        <p class="text-justify"> Lo importante es hacerle saber que estás allí, disponible en cualquier momento. Hazle saber la mejor manera de comunicarse contigo si necesita ayuda.</p>

        <div class="heading_container py-5">
            <h2>8. AYUDA PARA HACER UN PLAN DE SEGURIDAD O ESCAPE</h2>
        </div>

        <p class="text-justify"> Ayuda a la víctima a crear un plan de seguridad que pueda ponerse en práctica si la violencia ocurre nuevamente o si decide abandonar su domicilio. Hacer un plan puede ayudar a visualizar qué pasos son necesarios y prepararse psicológicamente para hacerlo.</p>

        <p class="text-justify"> Ayuda a la víctima a pensar en cada paso del plan de seguridad, sopesando los riesgos y beneficios de cada opción y las formas de reducir los riesgos.</p>

        <p class="text-justify"> Asegúrense de incluir lo siguiente en el plan de seguridad:</p>

        <p class="text-justify">• Un lugar seguro para ir en caso de emergencia, o si decide salir de casa</p>

        <p class="text-justify">• Una excusa preparada para irse si se siente amenazada(o)</p>

        <p class="text-justify">• Una palabra clave para alertar a familiares o amigos de que necesita ayuda</p>

        <p class="text-justify">• Una “bolsa de escape” con dinero en efectivo, documentos importantes (acta de nacimiento, identificación oficial, etc.), llaves, artículos de tocador y una muda de ropa a la que se pueda acceder fácilmente en una situación de crisis.</p>

        <p class="text-justify">• Una lista de contactos de emergencia, incluidos familiares o amigos de confianza, refugios locales y línea telefónica de violencia familiar.</p>

        <div class="heading_container py-5">
          <h2>9. QUÉ NO HACER O DECIR A UNA VÍCTIMA DE VIOLENCIA FAMILIAR </h2>
      </div>

      <p class="text-justify"> Aunque no hay una forma correcta o incorrecta de ayudar a una víctima de violencia familiar, debe evitar hacer algo que empeore la situación. Aquí hay algunos cosas que los expertos sugieren evitar:</p>

      <p class="text-justify">• Culpar a la víctima. Eso es lo que hace el abusador.</p>

      <p class="text-justify">• Subestimar el peligro potencial para la víctima y para ti mismo.</p>

      <p class="text-justify">• Prometer cualquier ayuda que no puedas proporcionar.</p>

      <p class="text-justify">• Dar apoyo condicional.</p>

      <p class="text-justify">• Presionar a la víctima. Si la víctima no está dispuesta(o) a abrirse al principio, se paciente.</p>
          
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