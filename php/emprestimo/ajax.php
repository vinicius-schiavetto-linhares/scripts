<?php

switch($_SERVER['REQUEST_METHOD'])
{
case 'GET':
 $salario = $_GET["salario"];
 $prestacao = $_GET["prestacao"];
 $meses = $_GET["meses"];
 break;
case 'POST':
 $salario= $_POST["salario"];
 $prestacao= $_POST["prestacao"];
 $meses= $_POST["meses"];
 break;
default:
 $salario= $_REQUEST["salario"];
 $prestacao= $_REQUEST["prestacao"];
 $meses= $_REQUEST["meses"];
 break;
}


if(isset($salario) && isset($prestacao) && isset($meses)){
	require_once("emprestimo.php");
	$e = new Emprestimo;
	
	if($e->verificaEmpresimo($salario, $prestacao, $meses)){
		echo "Empréstimo pode ser concedido.";
	}else{
		echo "Empréstimo não pode ser concedido.";
	}
}

?>