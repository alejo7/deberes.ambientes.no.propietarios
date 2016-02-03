



<!DOCTYPE html> 
<html lang="es"> 
<head> 
           <meta charset="utf-8"> 
          <title>jQuery AJAX form submit using twitter bootstrap modal</title>
          <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body>
<div id="mensaje" class="alert"></div>

  <div class="container">
    <h4 class="col-md-8 col-md-offset-2">Registrate para poder matricularte</h4>
    <div id="success" class="success"></div>
    <div id="error" class="error"></div>

  <div class="row">

      <div class="col-md-8 col-md-offset-2">
            <form id="registro_users">
              <div class="form-group">
                <label for="nombre">Nombres</label>
                <input type="text" name="txtnombres" class="form-control" id="nombres" placeholder="Nombre">
              </div>

              <div class="form-group">
                <label for="Apellidos">Apellidos</label>
                <input type="text" name="txtapellidos" class="form-control" id="apellidos" placeholder="Apellidos">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="txtemail" class="form-control" id="email" placeholder="Email">
              </div>
            
              <div class="form-group">
                <label for="clave">Contraseña</label>
                <input type="password" name="txtclave" class="form-control" id="clave" placeholder="contraseña">
              </div>
              <div class="form-group">
                <label for="confir_clave">verificar contraseña</label>
                <input type="password" name="txtconfir_clave" class="form-control" id="confir_clave" placeholder="Verificar contraseña">
              </div>







  
               <button type="button" class="btn btn-primary" id="guardar" >Guardar</button>
             <button type="button" class="btn btn-primary" id="cancelar">Cancelar</button>
            </form>
          </div>
          <div >
            </div>
            

          

          
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



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

