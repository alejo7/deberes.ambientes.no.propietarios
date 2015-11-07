<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="#" method="post">
<select id="provincias" name="provincias">
	
	<option>Seleccione...</option>
	<option  value="1">AZUAY</option>
	<option  value="2">BOLIVAR</option>
	<option  value="3">CAÑAR</option>
	<option  value="4">CARCHI</option>
	<option  value="5">CHIMBORAZO</option>
	<option  value="6">COTOPAXI</option>
	<option  value="7">EL ORO </option>
	<option  value="8">ESMERALDA</option>
	<option  value="9">GALAPAGOS</option>
	<option  value="10">GUAYAS</option>
	<option  value="11">IMBABURA</option>
	<option  value="12">LOJA</option>
	<option  value="13">LOS RIOS</option>
	<option  value="14">MANABI</option>
	<option  value="15">MORONA SANTIAGO</option>
	<option  value="16">NAPO</option>
	<option  value="17">ORELLANA</option>
	<option  value="18">PASTAZA</option>
	<option  value="19">PICHINCHA</option>


</select>
<select select id="cantones" name="cantones">
<option>Seleccione...</option>
	
	<option>


	<?php
if(isset($_POST['btn'])	){

	require('cantones.php');
}
?>


</option>





</select>
<select>
	
	<option>Seleccione...</option>
	<option>
		
<?php
if(isset($_POST['btn'])	){

	require('parroquias.php');
}
?>

	</option>

	
</select>
<button id="btn" name="btn">Enviar</button>




</form>
</body>
</html>