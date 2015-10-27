


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
					

					<b><h1>Registrate</h1></b>
						<h1>Es gratis(y lo seguira siendo).</h1>

				</div>



				<div>

					
						<label for ="nombre ">Nombre:</label>
						<input type="text" id="nombre" name="nombre" value="">
						<br>
			  	</div>


					<div>

						<label for="apellidos" >Apellidos:</label>
						<input type="text"  id="apellidos" name="apellidos" value="">
						<br>
						
					</div>


					<div>

						<label for="email">Tu email:</label>
						<input type="email" id="email" name="email" value="">
						<br>
						<br>

					</div>



					<div>

						<label for="againmail">Escribe de nuevo<br>el correo<br>
						electronico:</label>
						<input type="email" id="againmail "name="againmail" value="">
						<br>
						<br>
						
					</div>


					<div>

						<label for="contrasena">Contraseña nueva:</label>
						<input type="password" id="contrasena" name="contrasena" value="">
						<br>

					</div>


					<div>




					 <div>
    

						<label for="sexo">Sexo:</label>
							<select name="sexo">
									<option value="sexo">selecciona el sexo:</option>
									<?php
								
												for($s = 1; $s<=2; $s++)
												{
										
														switch($s)
														{
															case "01": $genero = "M"; break;
															case "02": $genero = "F"; break;
																	
														}
														echo"<option value='$genero'>$genero</option>";
														}
									?>	
							<br>
							</select>

					</div>

				
					<div>

						<label >Fecha de<br> Nacimiento:</label>

							<select id="dia" name="dia">
									
								<option value="dia">dia:</option>
										<?php 

											
												for($day=1;$day<=31;$day++)  
												{
													
													echo"<option value='$day'>$day</option>";
												}
											
?>
								
							</select>


							<select name="mes">
							<option id="mes" value="mes">mes:</option>	
<?php
								
												for($m = 1; $m<=12; $m++)
												{
										
														switch($m)
														{
															case "01": $mes = "Enero"; break;
															case "02": $mes = "Febrero"; break;
															case "03": $mes = "Marzo"; break;
															case "04": $mes = "Abril"; break;
															case "05": $mes = "Mayo"; break;
															case "06": $mes = "Junio"; break;
															case "07": $mes = "Julio"; break;
															case "08": $mes = "Agosto"; break;
															case "09": $mes = "Septiembre"; break;
															case "10": $mes = "Octubre"; break;
															case "11": $mes = "Noviembre"; break;
															case "12": $mes = "Diciembre"; break;			
														}
														echo"<option value='$mes'>$mes</option>";
														}
									?>		
							</select>


							<select name="anio">
							<option id="anio" value="anio">año:</option>

						
														<?php

														$tope = date("Y");

														$edad_max = 0;
														$edad_min = 14;
																for($year= $tope - $edad_min; $year<=$tope - $edad_max; $year++)
																		echo "<option value='$year'>$year</option>";
?>
														
							</select>
							<br>
						</div>
					

					    <div id="vinculo">

						<br>

									<a href="pagina_deber.php">¿Por que debo proporcionar esta informacion?</a><br>
									<br>

									<button id="btn" name="btn">Registrate</button>	

						</div>
					

				
			</form>
<?php
			if(isset($_POST['btn'])){
				 require('p_index.php');
			}
?>
	</body>
</html>