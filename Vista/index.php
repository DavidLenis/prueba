<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Kodinger">
		<title>Factur - Iniciar Sesión</title>
		<link rel="shortcut icon" href="../Vista/img/Icono - Barnav.png" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/my-login.css">
	</head>

<body class="my-login-page">

	<video autoplay muted loop id="myVideo">
		<source src="../Vista/media/clip.mp4" type="video/mp4">
	</video>
	
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<br>
					<div align="center">
						<img class="mb-4" src="img/Factur - Logoo.png" width="100" height="100">
					</div>
					<div class="card fat">
						<div class="card-body">

							<form method="POST" action="../Modelo/compruebaLogin.php">

								<div class="form-group">
									<label for="user">Usuario</label>

									<input id="user" type="text" class="form-control" name="usuario" value="" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Contraseña
										<a href="contrasenaPerdida.php" class="float-right">
											Perdiste tu contraseña?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="contrasena" required data-eye>
								</div>

								<div class="form-group">
									<label>
										<input type="checkbox" name="remember"> Recordarme
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Ingresar
									</button>
								</div>
								<div class="margin-top20 text-center">
									
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; Factur 2018
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>

</body>

</html>