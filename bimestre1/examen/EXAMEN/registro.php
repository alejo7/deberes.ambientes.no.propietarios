<?php require('p_registro.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>	
	      <style>
					body{

						width: 100%;
						height: 100%;
						background-attachment: fixed;
						background-repeat: no-repeat;
						background-position: center;
						background-size: cover;
						background-image: url(imagenes/fondo.jpg) ;
						font-family: tahoma;
					}


					label{
						width: 25%;
						height: 25%;
						float:left;
						text-align:right;
						color:#000066;
						font-family: tahoma;
						font-size: 50%;
					}

				    h1{

				    font-size: 100%;
					color:#000066;
					font-family: tahoma;
				    } 

				    input{
						
						width: 50%;
						height: 20%;
						border:solid 0.5px #3366FF;
						font-family: tahoma;

					}

					form{
						
						width: 60%;
						height: 100%;
						margin: 0 auto;
						border:0px;
						font-family: tahoma;
					}

					select{

						height: 25%;
						font-size:70%;
						font-family: tahoma;
					}
				     #btn{

					float:left; 
					height: 22px;
					background-color:#00CC00;
					color: white;
					border:solid 0.5px #000000;
					font-family: tahoma;

					}

					#vinculo{
						width: 50%;
						height: 100%;
						margin: 0 auto;
						font-size: 50%;
						font-family: tahoma;
					}

					#titulo{
					width: 80%;
						height: 100%;
						margin: 0 auto;
						font-size: 80%;
						font-family: tahoma;

					}

			



	</style>

</head>


	<body>

		<form form action="#" method="post">
				
			<div id="titulo">
					

					<b><h1>Registro de usuarios</h1></b>
						
						<hr>

				</div>
						<?php if(isset($error) && $error != '' ): ?>
						    <div><?php echo $error;?></div>
						  <?php endif; ?>


				
						<label for="email">Tu email:</label>
						<input type="email" id="email" name="email" value="">
						<br>
						<br>

					</div>


					<div>

						<label for="contrasena">Contraseña nueva:</label>
						<input type="password" id="contrasena" name="contrasena" value="">
						<br>

					</div>


					<div>
					<label for="Vcontrasena">Confirmar contraseña:</label>
						<input type="password" id="Vcontrasena" name="Vcontrasena" value="">
						<br>

					</div>






					
				
					

							
						<br>

									
									<button id="btn" name="btn">Registrar</button>	

						</div>
					

				
			</form>

	</body>
</html>