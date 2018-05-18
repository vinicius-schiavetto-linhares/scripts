<?php

switch($_SERVER['REQUEST_METHOD'])
{
case 'GET':
 $c1= $_GET["c1"];
 $c2= $_GET["c2"];
 $c3= $_GET["c3"];
 $c4= $_GET["c4"];
 break;
case 'POST':
 $c1= $_POST["c1"];
 $c2= $_POST["c2"];
 $c3= $_POST["c3"];
 $c4= $_POST["c4"];
 break;
default:
 $c1= $_REQUEST["c1"];
 $c2= $_REQUEST["c2"];
 $c3= $_REQUEST["c3"];
 $c4= $_REQUEST["c4"];
 break;
}


if(isset($c1)){
	require_once("matriz.php");
	$m= new Matriz;
	$det = $m->calcDeterminante($c1, $c2, $c3, $c4);
	
	echo "O Determinante da matriz digitada é: <b>$det</b>";
}

?>