<?php
$result = "";
print_r($_POST);
if ( $_POST ) {
  $name = htmlentities($_POST['nombre']);
  $email = htmlentities($_POST['email']);
  $fono = htmlentities($_POST['telefono']);
  $direccion = htmlentities($_POST['direccion']);
  $usuario = htmlentities($_POST['usuario']);
  $contrasena=md5($_POST['clave']);


  
  $conn = new mysqli('localhost','root', '', 'registro');
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO usuarios(nombre,email,telefono,direccion,usuario,contrasena)
                  VALUES ('$name', '$email', '$fono', '$direccion','$usuario','$contrasena')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Existi&oacute; un error al insertar.' . $conn->error;
    } else {
      $result = 'Mensaje enviado con &eacute;xito.';
    }
  }
}
echo json_encode( $result );
?>