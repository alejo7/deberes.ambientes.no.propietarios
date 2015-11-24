<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$error = '';

if($_POST){
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $email = $_POST['email'];
  $againmail = $_POST['againmail'];
  $contrasena = md5($_POST['contrasena']);
  $sexo = $_POST['sexo'];
  $dia = $_POST['dia'];
  $mes = $_POST['mes'];
  $anio = $_POST['anio'];
  $verificar_contrasena=md5($_POST['Vcontrasena']);

  $camposRellenos=strlen($nombre)*strlen($apellidos)*strlen($email)*strlen($againmail)*strlen($contrasena)*strlen($sexo)*strlen($dia)*strlen($mes)*strlen($anio);

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
    

                           $conn = new mysqli('localhost' , 'root' , '', 'sistema');
                            if ($conn->connect_error) $error .= '<br>No se pudo conectar a la base de datos';//die($conn ->connect_error);





                                                      $query1="SELECT email FROM usuarios WHERE email='$email'";
                                                      $result=$conn->query($query1);
                                                      $fila=mysqli_num_rows($result);



                          
                                                        if($fila==0){




                                                          $query = "INSERT INTO usuarios
                                                                        (nombre, 
                                                                          apellidos, 
                                                                          email, 
                                                                          contrasena, 
                                                                          sexo, 
                                                                          dia, 
                                                                          mes, 
                                                                          anio)
                                                                      VALUES (
                                                                        '$nombre',
                                                                        '$apellidos',
                                                                        '$email',
                                                                        '$contrasena',
                                                                        '$sexo',
                                                                        '$dia',
                                                                        '$mes',
                                                                        $anio
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





