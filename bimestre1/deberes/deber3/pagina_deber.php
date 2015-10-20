<!DOCTYPE html>
<html>
<head>


<script language=JavaScript>
function clear_textbox()
{
if ( document.form1.text1.value =="Email" )
	{document.form1.text1.value = "";
}
else
if ( document.form1.text2.value =="contraseña" )
	{document.form1.text2.value = "";



}



}
</script>


	<title>
		
	</title>

<style >
	
	#cabecera{
height: 20px;
background:#000000;
padding: 10px;

		 
	}
#contenedor{

height: 150px;
background:silver;
padding: 10px;
}
	

	#btn1{
		width: 110px;
		
	

background-color:#3366CC;
	color: white;
	border:solid 2px #3366CC;
	height: 22px;
	border-radius: 2px 2px 2px 2px; 


	}

	#btn2{
		width: 50px;
		
	

background-color:white;
font-size: 60%;
	color: black;
	border:solid 0.5px black;
	height: 15px;
	border-radius: 2px 2px 2px 2px; 


	}


	#texto{
		margin: 0 auto;
		height: 50px;
		width: 500px;
	}

form{
	float:right;

}
#btn{
	height: 22px;
	border-radius: 2px 2px 2px 2px; 
	background-color:#33CC00;
	color: white;
	border:solid 2px #33CC00;
}


#izquierdo{
height: 50px;
width: 150px;
font-size: 40%;
text-align: justify;
	float:left;
}

#centro{
margin: 0 auto;
		height: 0px;
		width: 140px;
		font-size: 40%;
text-align: justify;
	
}

#derecho{
height: 10px;
width: 150px;
font-size: 40%;
text-align: justify;
	float:right;
}

#pie{
margin: 0 auto;
		height: 50px;
		width: 500px;
}

h6{
	float: left;
	font-size: 50%;
	color:silver;
}
p{
	font-size: 60%;

	text-align: justify;
}

</style>

</head>


<body>

<div id="cabecera">
<h6>Pagina de Prueba</h6>
<form name="form1" action="url_de_destino.html" method=post>
<input name="text1" onFocus=clear_textbox() value="Email">
<input name="text2" onFocus=clear_textbox() value="contraseña">
<button id="btn">ingresar</button>
</form>
</div>

<div id="contenedor">
<div id="texto">
<p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii 
accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus 
suscipiantur, quo dicit ridens inciderint id. Quo mundi
lobortis reformidans eu, legimus senserit definiebas an eos.

 </p>
  <button id="btn1">learn more>></button>
 </div>


</div>

<div id="pie">

	<div id="izquierdo">
	<h1>Cabecera</h1><br>
	Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, 
	legimus senserit definiebas an eos.<br><br>
 <button id="btn2">View details>></button>
	</div>

	<div id="centro">
	<h1>Cabecera</h1><br>
	Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, 
	legimus senserit definiebas an eos.<br><br>
 <button id="btn2">View details>></button>
	</div>

	<div id="derecho">
	<h1>Cabecera</h1><br>
	Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, 
	legimus senserit definiebas an eos.<br><br>
 <button id="btn2">View details>></button>
	</div>

	
</div>








</body>
</html>