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

foreach ($users as $usuarios) {




echo'
<tr >
<td   class="id">'.$usuarios['id'].'</td>
<td  class="editable" data-campo="nombre"><span>'.$usuarios['nombre'].'</span></td>
<td class="editable" data-campo="email"><span>  '.$usuarios['email'].'</span></td>
<td class="editable" data-campo="telefono"> <span> '.$usuarios['telefono'].'</span></td>
<td class="editable" data-campo="direccion"> <span> '.$usuarios['direccion'].'</span></td>
<td class="editable" data-campo="usuario"><span>  '.$usuarios['usuario'].' </span></td>
<td  class="editable" type="password"  data-campo="contrasena"><span>cambiar</span></td>

</tr>';


}