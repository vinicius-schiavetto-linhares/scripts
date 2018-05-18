<?php

switch($_SERVER['REQUEST_METHOD'])
{
case 'GET':
 $c1= $_GET["c1"];
 $c2= $_GET["c2"];
 break;
case 'POST':
 $c1= $_POST["c1"];
 $c2= $_POST["c2"];
 break;
default:
 $c1= $_REQUEST["c1"];
 $c2= $_REQUEST["c2"];
 break;
}


if(isset($c1) && isset($c2)){
	require_once("classTriangulo.php");
	$triangulo = new Triangulo;
	$hipo = $triangulo->calcHipotenusa($c1, $c2);
	echo "A Hipotenusa é: " . $hipo ;
}

?>