<?php
 
$campo=$_POST['campo'];
$valor=$_POST['valor'];
$id=$_POST['id'];


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