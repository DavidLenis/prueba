<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Kodinger">
		<title>Factur - Restablecer Contraseña</title>
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
				<div class="row justify-content-md-center align-items-center h-100">
					<div class="card-wrapper">
					<div align="center">
							<img class="mb-4" src="img/Factur - Logoo.png" width="100" height="100">
						</div>
						<div class="card fat">
							<div class="card-body">
								<h4 class="card-title">Restablecer Contraseña</h4>
								<form method="POST">

									<div class="form-group">
										<label for="email">Direccion de Correo</label>
										<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
										<div class="form-text text-muted">
											Al hacer click se enviara a su correo electronico el link para restablecer su contraseña. 
										</div>
									</div>

									<div class="form-group no-margin">
										<button type="submit" class="btn btn-primary btn-block">
											Enviar
										</button>
										<a href="index.php" class="float-right">
											Volver Atrás
										</a>
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
	</body>
</html>