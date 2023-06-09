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

  <title>Centros de Ayuda | Organizaciones a las que puedes pedir ayuda</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style-organizaciones.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive-organizaciones.css" rel="stylesheet" />
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
                  Centros de Ayuda
                </h2>
                <h1 class="section-2">
                  Organizaciones a las que puedes pedir ayuda
                </h1>
                <div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <img src="../images/organizaciones.jpg" class="img-modifier" alt="...">
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
            <div class=" d-lg-flex pt-lg-4 ">
              <div class="col-lg-9 mx-auto">
                <p class="text-justify mb-5"> Si es o ha sido agredido/a, o conoce a una persona víctima de violencia y desea ayudar, en la siguiente lista podrá consultar teléfonos y correos electrónicos de organizaciones que ofrecen primeros auxilios psicológicos y asistencia legal:</p>

                <div class="client_container">
                  <p class="font-weight-bold text-link mt-2"> Organizaciones</p>
                  <a class="w-100" href="#apoyopsicologico">Apoyo Psicológico</a>
                  <a class="w-100 my-3" href="#apoyolegal">Apoyo Legal y Psicológico</a>
                  <a class="w-100 mb-3" href="#organos">Órganos Receptores de Denuncia</a>
                  <a class="w-100 mb-2" href="#niños">Cuando la víctima es un niño o una niña</a>
                </div>

                <div class="heading_container py-5" id="apoyopsicologico">
                  <h2>APOYO PSICOLÓGICO</h2>
              </div>
              <div class="d-flex justify-content-center">
                <img src="../images/apoyopsicologico.jpg" alt="" class="img-organizacion">
              </div>

              <h4 class="mt-5 mb-3 font-weight-bold">1. Línea PsicoApoyo Por Nosotras</h4>

              <p class="text-justify"> Brinda primeros auxilios psicológicos a mujeres víctimas de violencia y orientación a personas que deseen saber cómo ayudar a quienes pasan por esta situación. La llamada es anónima, confidencial y gratuita.</p>

              <p class="text-justify"><span class="font-weight-bold text-color">Teléfono</span> 0212 - 4145114. Marcar la Opción 1</p>

              <p class="text-justify"><span class="font-weight-bold text-color">Horario</span> De martes a sábado. 8:00 am - 8:00 pm </p>

              <h4 class="mt-5 mb-3 font-weight-bold">2. PsicoApoyo AVESA</h4>

              <p class="text-justify"> Psicólogas formadas brindan atención psicológica en las modalidades presencial, virtual y telefónica a mujeres que vivan o hayan vivido violencia basada en género</p>

              <p class="text-justify"><span class="font-weight-bold text-color">Teléfono</span> 0424 - 1659742 (texto SMS o WhatsApp)</p>

              <p class="text-justify"><span class="font-weight-bold text-color">Horario</span> De lunes a viernes. 8:00 am - 8:00 pm</p>

              <p class="text-justify"><span class="font-weight-bold text-color">Presencial en Caracas:</span> Av. Libertador. Edf. La Línea. Torre A. Piso 10. Oficina 104-A. Urb. Los Caobos. </p>

              <p class="text-justify"> De lunes a jueves, de 9:00 am a 1:00 pm. Es un servicio gratuito y confidencial, al que se accede previa cita escribiendo al correo o al teléfono.</p>

              <h4 class="mt-5 mb-3 font-weight-bold">3. Línea de ayuda psicológica de la Federación de Psicólogos de Venezuela </h4>

              <p class="text-justify"> Ofrece primeros auxilios psicológicos e intervención en crisis por teléfono. </p>

              <p class="text-justify"><span class="font-weight-bold text-color">Teléfono</span> 0212-416.31.16 / 0212-4163118</p>

              <p class="text-justify"><span class="font-weight-bold text-color">Horario</span> A partir de los viernes desde las 8:00 am, hasta los miércoles a las 8:00 am</p>

              <h4 class="mt-5 mb-3 font-weight-bold">4. Servicio de atención psicosocial de la Comisión para los Derechos Humanos y La Ciudadanía (Codehciu) </h4>

              <p class="text-justify">Atención privada y gratuita vía telefónica.</p>

              <p class="text-justify"><span class="font-weight-bold text-color">Teléfono</span> 0412 - 1850266</p>

              <p class="text-justify"><span class="font-weight-bold text-color">Horario</span> De 8:00 am a 5:00 pm </p>

              <h4 class="mt-5 mb-3 font-weight-bold">5. Médicos Sin Fronteras </h4>

              <p class="text-justify">Servicio de Atención Nacional a la Víctima (SALVA).</p>

              <p class="text-justify"><span class="font-weight-bold text-color">Teléfono</span> 0414 - 0179925</p>

              <h4 class="mt-5 mb-3 font-weight-bold">6. Unidad de Atención Psicológica de PLAFAM</h4>

              <p class="text-justify">Ofrece servicios psicológicos especializados en salud sexual y reproductiva, con énfasis en la prevención y atención de casos de violencia contra las mujeres.</p>

              <p class="text-justify"><span class="font-weight-bold text-color">Teléfono</span> 0412 - 2273712 (texto SMS o llamada telefónica)</p>

              <p class="text-justify"><span class="font-weight-bold text-color">Horario</span> De 9:00 am a 5:00 pm. </p>
    
              <p class="text-justify"><span class="font-weight-bold text-color">E-mail</span> coordinacion.uap@gmail.com</p>

              <h4 class="mt-5 mb-3 font-weight-bold">7. Línea de la organización civil Mulier Venezuela</h4>

              <p class="text-justify">Atención psicológica gratuita.</p>

              <p class="text-justify"><span class="font-weight-bold text-color">Teléfono</span> 0414 - 6254125</p>

              <div class="heading_container py-5" id="apoyolegal">
                <h2>APOYO LEGAL Y PSICOLÓGICO</h2>
            </div>
            <div class="d-flex justify-content-center">
              <img src="../images/apoyolegal.jpg" alt="" class="img-organizacion">
            </div>

            <h4 class="mt-5 mb-3 font-weight-bold">1. Alianza Cepaz, Fundamujer y CEM-UCV</h4>

            <p class="text-justify"> Ofrecen asesoría legal a mujeres víctimas y a familiares y apoyo psicosocial. Brindan asesoría e información sobre las instituciones a las que se puede acudir en los casos de violencia contra la mujer.</p>

            <p class="text-justify"><span class="font-weight-bold text-color">Teléfonos de atención psicosocial</span> 0412 - 3071273 / 0414 - 3281196</p>

            <p class="text-justify"><span class="font-weight-bold text-color">Horario</span> De 8:00 am - 8:00 pm </p>

            <p class="text-justify"><span class="font-weight-bold text-color">Teléfonos de atención legal</span> 0424 - 1831025 / 0414 - 2812077 </p>

            <p class="text-justify"><span class="font-weight-bold text-color">Horario</span> De 7:00 am - 2:00 pm  </p>

            <p class="text-justify"><span class="font-weight-bold text-color">E-mail</span> fundamujervenezuela@gmail.com</p>

            <h4 class="mt-5 mb-3 font-weight-bold">2. Servicio de atención psicosocial de la Comisión para los Derechos Humanos y La Ciudadanía (Codehciu)</h4>

            <p class="text-justify"> Ofrecen servicios gratuitos de gestoría de casos, apoyo psicosocial y asesoría legal en el estado Bolívar.</p>

            <p class="text-justify"><span class="font-weight-bold text-color">Teléfono</span> 0412 - 8782826 / 0426 - 1182327</p>

            <p class="text-justify"><span class="font-weight-bold text-color">Horario</span> De 8:00 am a 5:00 pm </p>

            <h4 class="mt-5 mb-3 font-weight-bold">3. Voluntariado “Mayell Hernández”, de En Tinta Violeta</h4>

            <p class="text-justify"> Brindan atención telefónica psicolegal y acompañamiento físico para denuncias. Están en Caracas, Lara, Mérida, Yaracuy, Táchira, Sucre, Carabobo, Aragua, La Guaira, Nueva Esparta, y en la ciudad de Barcelona en Anzoátegui.  </p>

            <p class="text-justify"><span class="font-weight-bold text-color">Teléfono</span> 0416 - 6358486 (Atención 24 horas) / 0424 - 1527105 (llamadas) / 0412 - 6154839 (WhatsApp)</p>

            <p class="text-justify"><span class="font-weight-bold text-color">Horario</span> De 6:00 am a 10:00 pm.</p>

            <p class="text-justify"><span class="font-weight-bold text-color">E-mail</span> entintavioleta@gmail.com  </p>

            <h4 class="mt-5 mb-3 font-weight-bold">4. Dilo Aquí</h4>

            <p class="text-justify"> Línea de emergencia. Asesoría legal de Transparencia Venezuela.</p>

            <p class="text-justify"><span class="font-weight-bold text-color">Teléfono</span> 0424 - 1981060</p>

            <p class="text-justify"><span class="font-weight-bold text-color">Horario</span> De lunes a sábado. 8:00 am - 5:00 pm..</p>

            <p class="text-justify"><span class="font-weight-bold text-color">E-mail</span> denuncia@transparencia.org.ve</p>

            <div class="heading_container py-5" id="organos">
              <h2>ÓRGANOS RECEPTORES DE DENUNCIA</h2>
          </div>
          <div class="d-flex justify-content-center">
            <img src="../images/organosreceptores.jpg" alt="" class="img-organizacion">
          </div>

          <h4 class="mt-5 mb-3 font-weight-bold">1. Ministerio Público</h4>

          <p class="text-justify"> Es un órgano del Poder Ciudadano que tiene por objetivo actuar en representación del interés general y es responsable del respeto a los derechos y garantías constitucionales a fin de preservar el Estado, democrático y social de derecho y de justicia. Recibe denuncias las 24 horas del día.</p>

          <p class="text-justify"><span class="font-weight-bold text-color">Teléfono</span> 0212 - 5098684 </p>

          <h4 class="mt-5 mb-3 font-weight-bold">2. Defensoría del Pueblo</h4>

          <p class="text-justify">Su misión es la defensa y protección de los derechos humanos y demás derechos, garantías e intereses tutelados en esta Constitución y las leyes, ante hechos, actos u omisiones de la Administración; y el control del ejercicio de las funciones administrativas públicas.</p>

          <p class="text-justify"><span class="font-weight-bold text-color">Teléfono</span> 0212 - 5077071</p>

          <p class="text-justify"><span class="font-weight-bold text-color">Horario</span> De lunes a viernes. 8:00 am - 2:00 pm</p>

          <p class="text-justify"><span class="font-weight-bold text-color">E-mail</span> atencionddp@defensoria.gov.ve  </p>

          <h4 class="mt-5 mb-3 font-weight-bold">3. Comisión Nacional de Justicia de Género del Poder Judicial </h4>

          <p class="text-justify">Monitorea la administración de justicia y el Estado de derecho en Venezuela.</p>
          <p class="text-justify"><span class="font-weight-bold text-color">E-mail</span> buzonvcm@gmail.com  </p>

          <div class="heading_container py-5" id="niños">
            <h2>SERVICIO DE ATENCIÓN CUANDO LA VÍCTIMA ES UN NIÑO O UNA NIÑA</h2>
        </div>
        <div class="d-flex justify-content-center">
          <img src="../images/apoyoinfantil.jpg" alt="" class="img-organizacion">
        </div>

        <h4 class="mt-5 mb-3 font-weight-bold">1. Atención telefónica de los Consejos de Protección de Niños, Niñas y Adolescentes</h4>

          <p class="text-justify">Los Consejos de Protección atienden casos de violencia contra la mujer cuando las víctimas son niñas o adolescentes. Estos órganos administrativos pueden dictar medidas de protección e intervenir en casos de maltrato y de abuso sexual. Consulte en el siguiente enlace el directorio nacional con los nombres y números de teléfono de los consejeros de protección de cada municipio del país:</p>
            <div class="py-3">
              <a href="https://www.redhnna.org/sistema-de-proteccion" target="_blank">Directorio de los Consejos de Protección</a>
            </div>

            <h4 class="mt-5 mb-3 font-weight-bold">2. Cecodap (ONG dedicada a la defensa y protección de los derechos de la niñez) </h4>

          <p class="text-justify">Servicio de atención psicológica a distancia para padres, madres, cuidadores, niños, niñas y adolescentes. </p>

          <p class="text-justify"><span class="font-weight-bold text-color">Teléfono</span> 0424 - 1804002 (mensaje de texto) | 0414 - 2696823 / 0424 - 2842359 (WhatsApp)</p>

          <p class="text-justify"><span class="font-weight-bold text-color">E-mail</span> cecodap.sap@gmail.com</p>

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