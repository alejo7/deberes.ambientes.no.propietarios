 <?php


    $conexion = mysql_connect("localhost","root");
  mysql_select_db("registro",$conexion)or die("no se pudo conectar a la base de datos ");
//include('/bdd/conexion.php');
$sql=mysql_query("SELECT * FROM usuarios");

    
    while($result=mysql_fetch_assoc($sql)){
      $users[]=$result;

     
//var_dump($users);
 
//

}
