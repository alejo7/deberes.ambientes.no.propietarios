<?php
if($_POST){
	$nick=$_POST['usuario'];
	
	$conexion = mysql_connect("localhost", "root", "");

      mysql_select_db("registro", $conexion);
  
  	 $consulta= "SELECT * from usuarios where usuario='$nick'";
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



