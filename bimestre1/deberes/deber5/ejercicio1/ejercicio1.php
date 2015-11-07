<!DOCTYPE html>
<html>
<head>
	<title></title>


<style>
	#derecho{

float:right;

	}

	fieldset{

		width:500px;
		height: 400px;
	    margin:auto;
	}


hr{
   border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}




</style>

</head>
<body>
<form action="#" method="post">
<fieldset>
  <legend>Conversor de monedas</legend>
 
 <br>
 <br>
 <br>
  <label for="valor">Valor en USD</label>
  <input type="text" id="valor" name="valor">
  
  <div id="derecho">

			  <label for="tipo_moneda">Convertir a:</label>

			  	<select name="tipo_moneda">
			      <option  value="">seleccione..</option>
			      <option  value="1">Euros</option>
			      <option  value="2">Pesos Colombia</option>
			      <br>
			    </select>

  </div>
  <br>
      <br>
      <br>
      <br>
      <br>
  <center>
    
      	<button id="conversion" name="conversion">Convertir</button>	
      <br>
      <br>
      
     
     

      <hr>
   
   <pre><p align="left"><label>                      Resultado:</label>&nbsp;</p></pre>


   <br>
   <br>
  
   
 <?php
			if(isset($_POST['conversion'])){
				 require('conversion.php');
			}
?>
   
   
  </center>
</fieldset>
</form>


</body>
</html>