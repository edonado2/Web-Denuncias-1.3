<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" href="css/login-register.css">
	<link rel="stylesheet" href="https://kit.fontawesome.com/7ecaddec00.css" crossorigin="anonymous">
	<link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-4">
						<img src="./assets/images/logo.png" alt="logo" width="50">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5 pb-3">
							<h1 class="fs-4 card-title fw-bold mb-4">Hola, inicia sesión en tu cuenta.</h1>
							<form action='./php/login_usuario_be.php' method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Correo Electrónico</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Correo electrónico inválido.
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Contraseña</label>
										<label for="view" class="float-end" type="button" onclick="mostrarContrasena()">
											<i id="view-icon" class="pe-2 text-muted fa-regular fa-eye-slash"></i>
										</label>
										<input id="password" type="password" class="form-control" name="contrasena" required>
										<div class="invalid-feedback">
											Contraseña inválida.
										</div>
										<a href="forgot.php" class="float-end mt-3 mb-4">
											Olvide mi contraseña
										</a>
									</div>

									<div class="w-100 d-flex align-items-center pt-4">
										<input type="hidden" name="session_id" value="<?php echo session_id() ?>">
										<button type="submit" class="btn btn-dark mx-auto fw-bold py-2 px-5">
											INICIAR SESIÓN
										</button>
									</div>
							</form>

						</div>
						<div class="card-footer pt-5 border-0">
							<div class="text-center">
								No tienes una cuenta? <a href="register.php" class="text-dark fw-bold text-decoration-none">Registrarme</a>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center my-4 text-muted">
					Copyright &copy; 2023 &mdash; Aitana
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
	<script src="js/login-register.js"></script>>
	<script src="https://kit.fontawesome.com/7ecaddec00.js" crossorigin="anonymous"></script>
</body>

</html>