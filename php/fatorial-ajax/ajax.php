<?php

switch($_SERVER['REQUEST_METHOD'])
{
case 'GET':
 $num= $_GET["numero"];
 break;
case 'POST':
 $num= $_POST["numero"];
 break;
default:
 $num= $_REQUEST["numero"];
 break;
}


if(isset($num)){
	require_once("fatorial.php");
	$fatorial = new Fatorial;
	$sete = $fatorial->multiploSete($num);
	$positivo = $fatorial->isPositivo($num);
	$fat = $fatorial->calcFatorial($num);
	
	if($sete){
		echo $num . " é múltiplo de 7";
	}else{
		echo $num . " não é múltiplo de 7";
	}
	echo "<br/>";
	if($positivo ){
		echo $num . " é positivo";
		echo "<br/>";
		echo "O fatorial de $num é <b>$fat</b>";
	}else{
		echo $num . " não é positivo";
	}
	
	
}

?>