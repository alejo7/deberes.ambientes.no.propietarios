<?php
	require('conexion.php');

$id=$_GET['id'];
$interes=$_POST['interes'];



if($_POST['enviar']==1){
	
		foreach ($_POST as $key => $value) {
			if($value!=1){
		$query ="INSERT INTO intereses (ID,interes)VALUES(NULL,'{$value}');";
		mysql_query($query,$conexion);
		}
}

	}




if($_POST['actualizar']==3){
		
		$query ="UPDATE intereses SET interes='$interes' WHERE id='$id'";
		mysql_query($query,$conexion);

}





if($query){
	header("Location:../tabla.php");
}


?>