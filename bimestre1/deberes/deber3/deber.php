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
						background-image: url(fondo.jpg) ;
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

			<form>
				
				<div id="titulo">
					

					<b><h1>Registrate</h1></b>
						<h1>Es gratis(y lo seguira siendo).</h1>

				</div>



				<div>

					
						<label>Nombre:</label>
						<input type="text" name="nombre">
						<br>
			  	</div>


					<div>

						<label >Apellidos:</label>
						<input type="text" name="apellidos">
						<br>
						
					</div>


					<div>

						<label>Tu email:</label>
						<input type="text" name="email">
						<br>
						<br>

					</div>



					<div>

						<label>Escribe de nuevo<br>el correo<br>
						electronico:</label>
						<input type="text" name="againmail">
						<br>
						<br>
						
					</div>


					<div>

						<label>Contraseña nueva:</label>
						<input type="text" name="contraseña">
						<br>

					</div>


					<div>

						<label>Sexo:</label>
							<select name="sexo">
									<option value="sexo">selecciona el sexo:</option>
									<option value="masculino">M</option>
									<option value="femenino">F</option>

							<br>
							</select>

					</div>

				
					<div>

						<label>Fecha de<br> Nacimiento:</label>
							<select name="dia">
										
								<option value="dia">dia:</option>	
										

											<?php
												for($dia=1;$dia<=31;$dia++)  
												{
													
													echo "<option value='$dd'>$dia</option>";
												}
											?>

								
							</select> 


							<select name="mes">
							<option value="mes">mes:</option>		

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
															echo "<option value='$me'>$mes</option>";
														}
											?>
							</select> 


							<select name="anio">
							<option value="anio">año:</option>

						
														<?php

														$tope = date("Y");

														$edad_max = 0;
														$edad_min = 14;
																for($a= $tope - $edad_min; $a<=$tope - $edad_max; $a++)
																		echo "<option value='$a'>$a</option>";

														?>
							</select>
							<br>
						</div>
					

					    <div id="vinculo">

						<br>

									<a href="pagina_deber.php">¿Por que debo proporcionar esta informacion?</a><br>
									<br>

									<button id="btn">Registrate</button>	

						</div>
					

				
			</form>

	</body>
</html>