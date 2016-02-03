<?php
if($_POST){
	$correo=$_POST['mail'];
  $contrasena=md5($_POST['clave']);
	
	$conexion = mysql_connect("localhost", "root", "");

      mysql_select_db("examen2", $conexion);
  
  	 $consulta= "SELECT * from estudiante where email='$correo' AND contrasena='$contrasena'";
  	 $resultado = mysql_query($consulta, $conexion);
     
     
     $numero_filas= mysql_num_rows($resultado);
     if($numero_filas>0){
    echo "false";
     }
     else{
    echo "true";
}
}

      
?>



