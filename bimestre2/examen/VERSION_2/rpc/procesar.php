<?php
$result =array('mensaje'=>'',
  'estado'=>0);
//print_r($_POST);
if ( $_POST ) {
  $nombres = htmlentities($_POST['nombres']);
  $apellidos = htmlentities($_POST['apellidos']);
  $email = htmlentities($_POST['email']);
 
  
  $contrasena=md5($_POST['clave']);


  
  $conn = new mysqli('localhost','root', '', 'examen2');
  if( $conn->connect_error ) 
    $result['mensaje'] = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO estudiante(nombres,apellidos,email,contrasena)
                  VALUES ('$nombres', '$apellidos', '$email', '$contrasena')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Existi&oacute; un error al insertar.' . $conn->error;
    } else {
      $result= "Estudiante registrado con &eacute;xito.";
      

    }
  }
}
echo json_encode( $result );
?>