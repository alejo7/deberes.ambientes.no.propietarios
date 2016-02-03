<?php

if($_POST){

  $id_nivel = $_POST['nivel'];

if($id_nivel==""){

echo 'por favor eliga una nivel para mostrar sus materias';

}

else{

  $id_nivel = $_POST['nivel'];

    $conexion = mysql_connect("localhost","root");
  mysql_select_db("examen2",$conexion)or die("no se pudo conectar a la base de datos ");
//include('/bdd/conexion.php');
$sql=mysql_query("SELECT * FROM materia WHERE id_nivel=$id_nivel");

    
    while($result=mysql_fetch_assoc($sql)){
      $materias[]=$result;

     
//var_dump($users);
 
//


}

foreach ($materias as $materia) {




echo'<input type="checkbox" name="materia" value="'.$materia['id_materia'].'">'.$materia['nombre'].'<br>';


}
}
}