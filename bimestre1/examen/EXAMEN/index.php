<?php
include('php/p_index.php');
?>
			<!DOCTYPE html>
			<html>
			<head>


			<title>
		
					</title>

						
	
</head>


	<body >
	
	 <?php if($msg != '') : ?>
					        <div><?php echo $msg; ?></div>
					      <?php endif; ?>




				
						<h6>Pagina de Prueba</h6>

						

						<form name="form1" action=" " method="post">

								<input type="text" name="email" placeholder="EMAIL" value="" /><br>
								<input type="password" name="contrasena" placeholder="CONTRASEÑA"  value="" />

																 <input type="submit" value="Iniciar Sesion" />
																<h6 aling=left><a href="registro.php">Registrarme</a></h6>
						

	</body>
</html>