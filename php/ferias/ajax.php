<?php

switch($_SERVER['REQUEST_METHOD'])
{
case 'GET':
 $faltas= $_GET["faltas"];
 break;
case 'POST':
 $faltas= $_POST["faltas"];
 break;
default:
 $salario= $_REQUEST["salario"];
 break;
}


if(isset($faltas)){
	try{
		if($faltas < 0) throw new Exception("<b>Atenção:</b> Faltas deve ser um número positivo");
		if($faltas <=5){
			echo "Dias de férias: <b>30</b>";
		}elseif($faltas <= 14){
			echo "Dias de férias: <b>24</b>";
		}elseif($faltas <= 23){
			echo "Dias de férias: <b>18</b>";
		}elseif($faltas <=32){
			echo "Dias de férias: <b>12</b>";
		}else{
			echo "Não há dias de férias disponíveis";
		}
	}
	catch(Exception $e){
		echo ($e->getMessage());
	}
}

?>