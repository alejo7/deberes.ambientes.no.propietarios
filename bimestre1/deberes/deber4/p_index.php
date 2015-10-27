<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';


//if($_POST){
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $email = $_POST['email'];
  $againmail = $_POST['againmail'];
  $contrasena = md5($_POST['contrasena']);
  $sexo = $_POST['sexo'];
  $dia = $_POST['dia'];
  $mes = $_POST['mes'];
  $anio = $_POST['anio'];
  $camposRellenos=strlen($nombre)*strlen($apellidos)*strlen($email)*strlen($againmail)*strlen($contrasena)*strlen($sexo)*strlen($dia)*strlen($mes)*strlen($anio);
  
    if($camposRellenos>0){
              if($email===$againmail){

                           $conn = new mysqli('localhost' , 'root' , '', 'sistema');
                            if ($conn->connect_error) die($conn ->connect_error);


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
                                 
                            echo 'Se ha registrado con exito';
                            }

                                  else{

                                  echo 'Por favor ,introduzca los correo identicos';


                                  }


                          

                            $result = $conn ->query($query);
                            if (!$result) die($conn ->error);

                       
                                  
                }

  
else{

echo 'Por favor rellene todos los campos';

}













 