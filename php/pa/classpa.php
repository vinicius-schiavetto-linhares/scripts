<?php

class PA{
	
	private $r;
	private $a1;
	private $a2;
	private $sn;
	private $n;
	private $an;
	
	function PA(){
		$r = 0;
		$a1 = 0;
		$a2 = 0;
		$sn = 0;
		$n = 0;
		$an = 0;
	}
	
	function razao($a1, $a2){
		$this->a1 = $a1;
		$this->a2 = $a2;
		$this->r = $a2-$a1;
		return $this->r;
	}
	
	function soma($n, $a1, $an){
		$this->n = $n;
		$this->a1 = $a1;
		$this->an = $an;
		$this->sn = $n * ($a1 + $an) / 2;
		return $this->sn;
	}
	
	function termo($a1, $n, $r){
		$this->a1 = $a1;
		$this->n = $n;
		$this->r = $r;
		$this->an = $a1 + ($n-1) * $r;
		return $this->an;
	}
	
	function setR($r){
		$this->r= $r;
	}
	function getR(){
		return $this->r;
	}
	function setA1($a1){
		$this->a1= $a1;
	}
	function getA1(){
		return $this->a1;
	}
	function setA2($a2){
		$this->a2= $a2;
	}
	function getA2(){
		return $this->a2;
	}
	function setSn($sn){
		$this->sn= $sn;
	}
	function getSn(){
		return $this->sn;
	}
	function setN($n){
		$this->n= $n;
	}
	function getN(){
		return $this->n;
	}
	function setAn($an){
		$this->an= $an;
	}
	function getAn(){
		return $this->an;
	}
	
}

?>