<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo</title>
   
  </head>
<body>


   <?php

$id=$_GET['id'];

include('bdd/conexion.php');
$sql=mysql_query("SELECT * FROM intereses WHERE ID='$id'");

    
  $result=mysql_fetch_array($sql,MYSQL_ASSOC);

?>

<form id="datos" name="datos" action="bdd/consultas.php?id=<?php echo $result['ID'];?>" method="post" >
 
  <div id="contenedor_1" class="contenedor">
    <label for="intereses">Interés   <?php echo $id ?>:</label>
    <input type="text" id="interes" name="interes" value="<?php echo $result['interes']?>">
  </div>
  
 
  <button id="actualizar" name="actualizar" value="3">actualizar</button>
  
  </form>
  <script src="js/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <script>
  // Your code goes here.
  </script>
</body>
</html>