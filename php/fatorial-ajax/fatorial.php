<?php

class Fatorial{
	
	private $n;
	private $fatorial;
	
	function Fatorial(){
		$n = 0;
		$fatorial = 0;
	}
	
	function calcFatorial($n){
		$this->n = $n;
		
		$this->fatorial = 1;
		
		for($i = 1; $i <= $n; $i++){
			$this->fatorial *= $i;
		}
		return $this->fatorial;
	}
	
	function isPositivo($n){
		if($n>0){
			return true;
		}else{
			return false;
		}
	}
	
	function multiploSete($n){
		if($n%7 == 0){
			return true;
		}else{
			return false;
		}
	}
	
	function setN($n){
		$this->n = $n;
	}
	function getN(){
		return $this->n;
	}
	function setFatorial($fatorial){
		$this->fatorial = $fatorial;
	}
	function getFatorial(){
		return $this->fatorial;
	}	
}

?>