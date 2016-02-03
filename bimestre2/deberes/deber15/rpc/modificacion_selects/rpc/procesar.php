<?php
$result =array('mensaje'=>'',
  'estado'=>0);
//print_r($_POST);
if ( $_POST ) {
  $name = htmlentities($_POST['nombre']);
  $email = htmlentities($_POST['email']);
  $fono = htmlentities($_POST['telefono']);
  $direccion = htmlentities($_POST['direccion']);
  $usuario = htmlentities($_POST['usuario']);
  $provincia=htmlentities($_POST['provincia']);
  $canton=htmlentities($_POST['canton']);
  $parroquia=htmlentities($_POST['parroquia']);
  
  $contrasena=md5($_POST['clave']);


  
  $conn = new mysqli('localhost','root', '', 'registro');
  if( $conn->connect_error ) 
    $result['mensaje'] = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO usuarios(nombre,email,telefono,direccion,usuario,provincia,canton,parroquia,contrasena)
                  VALUES ('$name', '$email', '$fono', '$direccion','$usuario','$provincia','$canton','$parroquia','$contrasena')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result['mensaje'] = 'Existi&oacute; un error al insertar.' . $conn->error;
    } else {
      $result['mensaje'] = "Mensaje enviado con &eacute;xito.";
      $result['estado'] = 1;

    }
  }
}
echo json_encode( $result );
?>