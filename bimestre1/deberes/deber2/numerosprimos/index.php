<!DOCTYPE html>
<?php
	function generar_tabla(){
		echo '<table class"normal">';
		$i=0;
				while ($i < 100) {
					echo '<tr>';
					echo '<th>';
					echo '<td>';
					for ($j=0; $j<10 ; $j++) { 
						$es_primo= es_primo($i);
						if($es_primo){
						//echo  '<td bgcolor="#F70808"><div align="center">'.$i++.' </div></td>';
						//$clase='';
					
				echo '<td bgcolor="#F70808"><div align=”center”>'.$i++.'</div></td>';
					
					}
						else
							echo '<td><div align="center">'.$i++.'</div></td>';
						///$clase='class="primo"';
					//echo "<tr>";

						//echo $i++;


						
					
					}
					echo '</th>';
					echo '</td>';
					echo '</tr>';
				}
		echo '</table>';
	}
	function es_primo($num){
       $contador=0;
       for($k=1;$k<=$num;$k++){
                 if($num%$k==0){
                   
                     	$contador++;

       	                   }
                     }


				                     if($contador==2){
				                     	return true;
                     						}
					                     else{
					                      return false;

                     							}
       
}
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
	<body>
			<?php
					generar_tabla();
			?>
	</body>
</html>