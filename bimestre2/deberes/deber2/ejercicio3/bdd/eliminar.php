<?php
	require('conexion.php');

	$id=$_GET['id'];
	
		
		$query ="DELETE FROM intereses WHERE id='$id'";
		mysql_query($query,$conexion);




if($query){
	header("Location:../tabla.php");
}
?>