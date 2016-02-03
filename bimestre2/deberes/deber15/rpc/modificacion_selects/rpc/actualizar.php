<?php
 
$campo=$_POST['campo'];

$id=$_POST['id'];


/*valido si el campo es contraseña lo que hace es encriptar la clave si el campo es de cualquier otro tipo no se encripta la variable $valor ya que son datos del usuario 
*/
if($campo=="contrasena"){

$valor=md5($_POST['valor']);


}
else{

$valor=$_POST['valor'];

}

 $conexion = mysql_connect("localhost","root");
  mysql_select_db("registro",$conexion)or die("no se pudo conectar a la base de datos ");
		
		$query ="UPDATE usuarios SET $campo='$valor' WHERE id='$id'";
		mysql_query($query,$conexion);

if($query){
$query='Modificado con exito';

}

else
{
$query='El dato no fue Modificado';




}
echo json_encode( $query );
?>