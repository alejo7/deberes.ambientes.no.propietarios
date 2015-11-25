<?php
require('inc/bdd.php');
$error = '';

if($_POST){
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $email = $_POST['email'];
  $againmail = $_POST['Vemail'];
  $contrasena = md5($_POST['contrasena']);
  $verificar_contrasena = md5($_POST['Vcontrasena']);
  $edad= ['edad'];
  $peso = $_POST['peso'];
  $genero = $_POST['genero'];
  $estado = $_POST['Estado'];
  
  $camposRellenos=strlen($nombre)*strlen($apellidos)*strlen($email)*strlen($againmail)*strlen($contrasena)*strlen($verificar_contrasena)*strlen($edad)*strlen($peso)*strlen($genero)*strlen($estado);

  if($camposRellenos<=0){
   $error .= htmlentities('Por favor, Rellene todos los campos');
}
else
  
  


 if($email !== $againmail){
    $error .= htmlentities('Los correos no coinciden');
  }

else

  if($contrasena !== $verificar_contrasena){
    $error .= htmlentities('Las contraseñas no coinciden');
  }


else


  if($error == ''){
    

                           $conn = new mysqli('localhost' , 'root' , '', 'registro');
                            if ($conn->connect_error) $error .= '<br>No se pudo conectar a la base de datos';//die($conn ->connect_error);





                                                      $query1="SELECT email FROM usuarios WHERE email='$email'";
                                                      $result=$conn->query($query1);
                                                      $fila=mysqli_num_rows($result);



                          
                                                        if($fila==0){




                                                          $query = "INSERT INTO usuarios
                                                                        (Nombre, 
                                                                          Apellidos, 
                                                                          email, 
                                                                          contraseña, 
                                                                          Edad, 
                                                                          Peso, 
                                                                          Genero, 
                                                                          Estado)
                                                                      VALUES (
                                                                        '$nombre',
                                                                        '$apellidos',
                                                                        '$email',
                                                                        '$contrasena',
                                                                        '$edad',
                                                                        '$peso',
                                                                        '$genero',
                                                                        $estado
                                                                        )

                                                        ";
                                                       $result = $conn ->query($query);
                                                         
                                                          
                                                          if($error == '') {
                                                            http_redirect('index.php?exito=' . urlencode('Datos guardados con exito'));
                                                          }
                                                        }

                                                          else
                                                      {

                                                              $error .= htmlentities('No se pudo registar,vuelva a intentar');
                                                      }

                            

}
}





?>

<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="post">
<h1>Registro de clientes</h1>
<hr>

<label for ="nombre">Nombre</label><br>
<input type="text" id ="nombre" name"nombre" value=""></input><br>

<label for ="apellidos">Apellidos</label><br>
<input type="text" id ="apellidos" name"apellidos" value=""></input><br>

<label for ="email">Email</label><br>
<input type="text" id ="email" name"email" value=""></input><br>

<label for ="Vemail">Verificar email</label><br>
<input type="text" id ="Vemail" name"Vemail" value=""></input><br>

<label for ="contraseña">Apellidos</label><br>
<input type="password" id ="contrasena" name"contraseña" value=""></input><br>


<label for ="Vcontraseña">Verificar contraseña</label><br>
<input type="password" id ="Vcontrasena" name"Vcontrasena" value=""></input><br>





<label for="edad">Edad:</label>
							<select name="edad">
									<option value="Seleccione....">selecciona el sexo:</option>
									<?php
								
												for($s = 1; $s<=4; $s++)
												{
										
														switch($s)
														{
															case "01": $rango = "Menos de 20 años "; break;
															case "02": $rango = "Entre 20 y 39 años"; break;
															case "03": $rango = "Entre 40y 59 años "; break;
															case "04": $rango = "Mas de 60 años"; break;
																	
														}
														echo"<option value='$rango'>$rango</option>";
														}
									?>	
							<br>
							</select><br>




<label for ="peso">Peso</label><br>
<input type="text" id ="peso" value=""></input><br>

<label for ="genero">Genero</label><br>
<input type="radio" name="Hombre" value="Hombre">Hombre<br>
<input type="radio" name="Hombre" value="Mujer">Mujer<br>


<label for ="Estado">Estado civil</label><br>
<input type="radio" name="soltero" value="Soltero">Soltero<br>
<input type="radio" name="casado" value="Casado">Casado<br>
<input type="radio" name="divorciado" value="Divorciado">Divorciado<br>

<button name="registro">Registrar</button>


</form>
</body>
</html>