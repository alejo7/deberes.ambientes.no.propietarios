<?php
session_start();
include ('rpc/conexion.php');


//var_dump($_SESSION["Id_user"]);

if(isset($_SESSION['user'])) {?>
<!DOCTYPE html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <title>Pagina de Registro</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
  
<h1 class="text-center" >Bienvenido <?php  echo($_SESSION['nombres']) ?>,esta es la pantalla para poder matricularte</h1>
      <hr>


<div class="container">


        <div class="col-md-8 col-md-offset-2">


                                <div class="row">

                                            <div class="col-md-6">
                                                            <label for="nivel" >Nivel</label>
                                                            <select id="nivel" name="txtnivel" class="form-control">
                                                                      <option value="" class="form-control">Seleccione...</option>
                                                                               <?php
                                                                               include('/rpc/get_levels.php')
                                                                             
                                                                                ?>
                                                            </select>
                                                            

                                            </div>



                                              <div class="col-md-6">
                                                                <div id="carga">


                                                                </div><br><br><br><br>

                                              </div>


                                          

                                               <div class="col-md-2 col-md-offset-5">


                                                <button id="btn-registrar" class="btn btn-primary">Registrar Materias</button>

                                               </div>
                                    </div>




 <a href="rpc/logout.php"><button class="btn btn-success">Salir</button></a>

            </div>

</div>



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>




