<?php

$conn = new mysqli('localhost' , 'root' , '', 'registro');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM provincias";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$provincias = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $provincias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}
//print_r($provincias);


$query = "SELECT * FROM usuario";
$result = $conn ->query($query);

//$usuarios;

/*$result ->close();
$conn ->close();*/
?>



<!DOCTYPE html> 
<html lang="es"> 
<head> 
  <meta charset="utf-8"> 
  <title>jQuery AJAX form submit using twitter bootstrap modal</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

</head>
<body>
<div id="mensaje" class="alert"></div>

  <div class="container">
    <h4>Registro de Usuarios</h4>
    <div id="success" class="success"></div>
    <div id="error" class="error"></div>

  <div class="row">
      <div class="col-md-offset-1 col-md-4">
    
            <form id="registro_users">
              <div class="form-group">
              <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono">
              </div>
              <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Direccion">
              </div>
              <div class="form-group">
                <label for="provincia" >Provincia</label>
                <select id="txtprovincia" name="provincia" class="form-control">
                          <option value="" class="form-control">Seleccione...</option>
                                    <?php






                                    

                                      foreach($provincias as $pr){
                                        echo '<option value="' . $pr['cod_provincia'] . '">' . $pr['provincia'] . '</option>';
                                      }

                                    ?>
                </select>
                
                  <div class="form-group">
                <label for="canton" >Canton</label>
                <select id="txtcanton" name="canton" class="form-control">
                          <option value="" class="form-control">Seleccione...</option>
                                  
                </select>
                
              </div>
              </div>
              <div class="form-group">
                <label for="parroquia" >Parroquia</label>
                <select id="txtparroquia" name="parroquia" class="form-control">
                          <option value="" class="form-control">Seleccione...</option>
                                  
                </select>
                
            





              <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario">
              </div>
              <div class="form-group">
                <label for="clave">Contraseña</label>
                <input type="password" name="clave"  class="form-control" id="clave" placeholder="contraseña">
              </div>
              <div class="form-group">
                <label for="confir_clave">verificar contraseña</label>
                <input type="password" name="confir_clave" class="form-control" id="confir_clave" placeholder="Verificar contraseña">
              </div>









             
            </form>
          </div>
          <div >
            
            <button type="button" class="btn btn-primary" id="guardar" >Guardar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
<br>
<br>


<div id="mensaje_modificacion" class="alert"></div>
 
<div id="carga">
<h4>Usuarios registrados</h4>

<form id="users_registered">
 <div class="form-group">
                <label for="coincidencia">BUSCAR</label>
                <input type="text" name="coincidencia" class="form-control" id="buscar" >
              </div>
<table id="tabla_users" class="table table-hover" width="50">
    
<thead>

<tr>
  <td>id</td>
   <td >Nombre</td>
<td>Email</td>
<td>Telefono</td>
<td>Direccion</td>
<td>Usuario</td>
<td>Contraseña</td>
</tr>
  




</thead>
<tbody>
  

 

 <?php


include('/rpc/get_all_users.php');




?>

</tbody>
</table>
</form>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

