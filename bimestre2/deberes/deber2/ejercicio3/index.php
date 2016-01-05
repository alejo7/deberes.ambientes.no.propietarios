

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo</title>
   
  </head>
<body>


  
<form id="datos" name="datos" action="bdd/consultas.php" method="post" >
  <div id="contenedor_1" class="contenedor">
    <label for="intereses">Interés 1:</label>
    <input type="text" id="interes1" name="interes1" value="" required>
  </div>
  <button id="btn">Agregar Interés</button>
  <button id="btn_eliminar">Eliminar último Interés</button>
  <button id="enviar" name="enviar" value="1">Guardar</button><br>
 <a href="tabla.php">Consultar Registros</a>
  </form>
  <script src="js/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <script>
  // Your code goes here.
  </script>
</body>
</html>