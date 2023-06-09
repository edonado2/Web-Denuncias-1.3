<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Crear cuenta</title>
  <link rel="stylesheet" href="css/login-register.css" />
  <link rel="stylesheet" href="https://kit.fontawesome.com/7ecaddec00.css" crossorigin="anonymous">
  <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
  <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
</head>

<body>
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
          <div class="text-center my-4">
            <img src="./assets/images/logo.png" alt="logo" width="50" />
          </div>
          <div class="card shadow-lg">
            <div class="card-body p-5">
              <h1 class="fs-4 card-title fw-bold mb-4">
                Hola, crea una cuenta.
              </h1>
              <form action="./php/register_be.php" method="POST" class="needs-validation" novalidate="" autocomplete="off">
                <div class="mb-3">
                  <label class="mb-2 text-muted" for="name">Nombre</label>
                  <input id="name" pattern="^[a-zA-Z]+$" type="text" class="form-control" name="nombre" value="" required autofocus />
                  <div class="invalid-feedback">Nombre inválido.</div>
                </div>
                <div class="mb-3">
                  <label class="mb-2 text-muted" for="name">Apellido</label>
                  <input id="surename" pattern="^[a-zA-Z\u00F1]+$" type="text" class="form-control" name="apellido" value="" required autofocus />
                  <div class="invalid-feedback">Apellido inválido.</div>
                </div>

                <div class="mb-3">
                  <label class="mb-2 text-muted" for="email">Correo Electrónico</label>
                  <input id="email" type="email" class="form-control" name="email" value="" required />
                  <div id="email-error" class="invalid-feedback">
                    Correo electrónico inválido.
                  </div>
                </div>

                <div class="mb-3">
                  <label class="mb-2 text-muted" for="password">Contraseña</label>
                  <label for="view" class="float-end" type="button" onclick="mostrarContrasena()">
                    <i id="view-icon" class="pe-2 text-muted fa-regular fa-eye-slash"></i>
                  </label>
                  <input id="password" type="password" pattern=".{8,12}" title="8 a 12 caracteres" class="form-control" name="contrasena" required />
                  <div class="invalid-feedback">Contraseña inválida.</div>
                </div>

                <p class="form-text text-muted mb-4">
                  Al registrarte estás de acuerdo con nuestros términos y
                  condiciones.
                </p>

                <div class="align-items-center d-flex mt-5">
                  <button type="submit" class="btn btn-dark mx-auto fw-bold py-2 px-4 text-light">
                    REGISTRARSE
                  </button>
                </div>
              </form>
            </div>
            <div class="card-footer py-3 border-0">
              <div class="text-center">
                Ya tienes una cuenta?
                <a href="login.php" class="text-dark fw-bold text-decoration-none">Inicia Sesión</a>
              </div>
            </div>
          </div>
          <div class="text-center mt-5 text-muted">
            Copyright &copy; 2023 &mdash; Aitana
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/login.js"></script>
  <script src="js/login-register.js"></script>
  <script src="https://kit.fontawesome.com/7ecaddec00.js" crossorigin="anonymous"></script>
  <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>

</html>