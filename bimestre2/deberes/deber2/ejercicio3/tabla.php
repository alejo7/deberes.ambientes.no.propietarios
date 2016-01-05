<!DOCTYPE html>
<html>
<head>
	<title>tabla interes</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<form id="datos" name="datos" action="guardar.php?id=<?php echo $result['ID'];?>" method="post">
<center>
	
<table id="tabla">
	
<thead>

<tr>
	
	<th colspan="1"><a href="index.php">agregar interes</th>
	<th colspan="5">LISTA DE INTERESES</th>
</tr>
	
	


</thead>
<tbody>
	

	<tr>
		
<td>ID</td>
<td>INTERES</td>
<td colspan="2">Operaciones</td>


	</tr>

	<?php
include('/bdd/conexion.php');
$sql=mysql_query("SELECT * FROM intereses");

		
		while($result=mysql_fetch_array($sql,MYSQL_ASSOC)){

?>


<tr>
	
	<td><?php echo $result['ID'];?></td>
	<td><?php echo $result['interes'];?></td>
	<td><a href="modificar_form.php?id=<?php echo $result['ID'];?>" >Modificar</a></td>
	<td><a type="submit" id="eliminar" name="eliminar" href="bdd/eliminar.php?id=<?php echo $result['ID'];?>" value="4" >Eliminar</a></td>
		
</tr>






<?php


}
?>

</tbody>
</table>

</center>

</body>
</html>