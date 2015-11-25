<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$error = '';

if($_POST){
 
  $email = $_POST['email'];
  $contrasena = md5($_POST['contrasena']);
  $verificar_contrasena=md5($_POST['Vcontrasena']);

  $camposRellenos=strlen($email)*strlen($verificar_contrasena)*strlen($contrasena);

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





