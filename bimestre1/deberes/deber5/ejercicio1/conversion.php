<?php

$valor=$_POST['valor'];
$tipo=$_POST['tipo_moneda'];

echo $tipo;

if($tipo=="2"){
$total=(2890.17341)*$valor;
echo "$valor USD equivale a $total pesos";

}
else {
	if($tipo=="1"){
$total1=0.908347716 *$valor;
echo "$valor USD equivale a $total1 euros";

echo $tipo;

}

}