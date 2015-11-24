<?php
include('php/p_index.php');
?>
			<!DOCTYPE html>
			<html>
			<head>


			<title>
		
					</title>

						<style >
	
							#cabecera{

							height: 20px;
							background:#000000;
							padding: 30px;

							}
							#contenedor{

							height: 150px;
							background:silver;
							padding: 10px;
							}
								

							
							#btn1{
							width: 110px;	
							background-color:#3366CC;
							color: white;
							border:solid 2px #3366CC;
							height: 22px;
							border-radius: 2px 2px 2px 2px; 
							}

							#btn2{
							width: 50px;
							background-color:white;
							font-size: 60%;
							color: black;
							border:solid 0.5px black;
							height: 15px;
							border-radius: 2px 2px 2px 2px; 
							}


							#texto{
							margin: 0 auto;
							height: 50px;
							width: 500px;
							}

							form{
							float:right;
							}

							#btn{
							height: 22px;
							border-radius: 2px 2px 2px 2px; 
							background-color:#33CC00;
							color: white;
							border:solid 2px #33CC00;
							}


							#izquierdo{

							height: 50px;
							width: 150px;
							font-size: 40%;
							text-align: justify;
							float:left;

							}

							#centro{

							margin: 0 auto;
							height: 0px;
							width: 140px;
							font-size: 40%;
							text-align: justify;
								
							}

							#derecho{
							height: 10px;
							width: 150px;
							font-size: 40%;
							text-align: justify;
							float:right;
							}

							#pie{

							margin: 0 auto;
							height: 50px;
							width: 500px;
							}

							h6{
								float: left;
								font-size: 50%;
								color:silver;
							}

							p{
								font-size: 60%;
								text-align: justify;
							}


							h6{

								color:silver;
							}

						</style>
	
</head>


	<body link="DC2055">
	
	 <?php if($msg != '') : ?>
					        <div><?php echo $msg; ?></div>
					      <?php endif; ?>




				<div id="cabecera">
						<h6>Pagina de Prueba</h6>

						

						<form name="form1" action=" " method="post">

								<input type="text" name="email" placeholder="EMAIL" value="" />
								<input type="password" name="contrasena" placeholder="CONTRASEÑA"  value="" />

																 <input type="submit" value="Crear sesión" />
																<h6 aling=left><a href="registro.php">Registrarse</a></h6>
						</form>
				</div>

				<div id="contenedor">
							<div id="texto">
							<p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii 
							accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus 
							suscipiantur, quo dicit ridens inciderint id. Quo mundi
							lobortis reformidans eu, legimus senserit definiebas an eos.
							 </p>
				 						<button id="btn1">learn more>></button>
				 			</div>


				</div>

				<div id="pie">

							<div id="izquierdo">
									<h1>Cabecera</h1><br>
									Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, 
									legimus senserit definiebas an eos.<br><br>
								 				<button id="btn2">View details>></button>
						</div>

						<div id="centro">
									<h1>Cabecera</h1><br>
									Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, 
									legimus senserit definiebas an eos.<br><br>
								 				<button id="btn2">View details>></button>
						</div>

						<div id="derecho">
									<h1>Cabecera</h1><br>
									Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, 
									legimus senserit definiebas an eos.<br><br>
								 				<button id="btn2">View details>></button>
						</div>

	
				</div>

	</body>
</html>