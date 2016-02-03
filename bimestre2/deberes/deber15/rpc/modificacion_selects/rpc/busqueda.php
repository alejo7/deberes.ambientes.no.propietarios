
<?php

$letra=$_POST['coincidencia'];

    $conexion = mysql_connect("localhost","root");
  mysql_select_db("registro",$conexion)or die("no se pudo conectar a la base de datos ");
//include('/bdd/conexion.php');
$sql=mysql_query("SELECT * FROM usuarios WHERE nombre LIKE '%".$letra."%' or email LIKE '%".$letra."%' or telefono LIKE '%".$letra."%' or direccion LIKE '%".$letra."%' or usuario LIKE '%".$letra."%'");

    $contar=mysql_num_rows($sql); 


    if($contar==0){
     
    		 echo "No se han encontrado resultados para '<b>".$letra."</b>'.";
    }
    else
{


    while($result=mysql_fetch_assoc($sql)){
      $users[]=$result;

     
//var_dump($users);
 
//


}

foreach ($users as $usuarios) {




echo'
<tr  id="resultado">
<td   class="id">'.$usuarios['id'].'</td>
<td  class="editable" data-campo="nombre"><span>'.$usuarios['nombre'].'</span></td>
<td class="editable" data-campo="email"><span>  '.$usuarios['email'].'</span></td>
<td class="editable" data-campo="telefono"> <span> '.$usuarios['telefono'].'</span></td>
<td class="editable" data-campo="direccion"> <span> '.$usuarios['direccion'].'</span></td>
<td class="editable" data-campo="usuario"><span>  '.$usuarios['usuario'].' </span></td>
<td type="password" class="editable" data-campo="contrasena"><span>cambiar</span></td>

</tr>';


}
}
/*echo json_encode(  );*/
