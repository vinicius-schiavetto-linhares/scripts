<?php

class Triangulo{
	
	private $c1;
	private $c2;
	private $h;
	
	function Triangulo(){
		$c1= 0;
		$c2= 0;
		$h= 0;
	}
	
	function calcHipotenusa($c1, $c2){
		$this->c1= $c1;
		$this->c2= $c2;
		
		$this->h = sqrt($c1*$c1 + $c2*$c2);
		
		return $this->h;
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
	function setH($h){
		$this->h= $h;
	}
	function getH(){
		return $this->h;
	}
}

?>