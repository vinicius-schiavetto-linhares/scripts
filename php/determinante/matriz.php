<?php

class Matriz{
	
	private $c1;
	private $c2;
	private $c3;
	private $c4;
	private $deteminante;
	
	function Matriz(){
		$n = 0;
		$fatorial = 0;
	}
	
	function calcDeterminante($c1, $c2, $c3, $c4){
		$this->c1 = $c1;
		$this->c2 = $c2;
		$this->c3 = $c3;
		$this->c4 = $c4;
		
		$this->deteminante =  ($c1 * $c4) + (-1) * ($c2 * $c3);
		
		return $this->deteminante;
	}
	
	function setC1($c1){
		$this->c1 = $c1;
	}
	function getC1(){
		return $this->c1;
	}
	function setC2($c2){
		$this->c2 = $c2;
	}
	function getC2(){
		return $this->c2;
	}	
	function setC3($c3){
		$this->c3 = $c3;
	}
	function getC3(){
		return $this->c3;
	}
	function setC4($c4){
		$this->c4 = $c4;
	}
	function getC4(){
		return $this->c4;
	}
	function setDeterminante($deteminante){
		$this->deteminante = $deteminante;
	}
	function getDeterminante(){
		return $this->deteminante;
	}		
}

?>