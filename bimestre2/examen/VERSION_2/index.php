<?php
	session_start();
	include ('rpc/conexion.php');
	if(isset($_SESSION['user'])){
	echo '<script> window.location="inicio.php"; </script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
			   <meta charset="utf-8"> 
			   <title>Pagina de login</title>
			   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
			<h1 class="text-center" >Inicio de sesion para poder matricularte</h1>
			<hr>
<div  id="advertencia"></div>
<div class="container">


				<div class="row">

						<div class="col-md-4 col-md-offset-4">



								<form id="login_estudiantes" method="post" action="rpc/validar_estudiante.php" >




											<div class="form-group">

								    			<label for="email">Email</label>

												<input type="text" class="form-control" name="email" placeholder="Email"><br><br>

											</div>






											<div class="form-group">

								    			<label for="contrasena">Contraseña</label>

												<input type="password" class="form-control" name="contrasena" placeholder="Contraseña"><br><br>

											</div>






												<input type="submit" class="btn btn-primary" name="login" value="Entrar">
												<a href="registro.php">Registrate</a>
			



									</form>

							</div>
				</div>
</div>

			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/jquery.validate.js"></script>
			<script type="text/javascript" src="js/additional-methods.js"></script>
			<script type="text/javascript" src="js/main.js"></script>
</body>
</html>