<?php

class Emprestimo{
	
	private $salario;
	private $prestacao;
	private $meses;
	
	function Emprestimo(){
		$salario = 0;
		$prestacao = 0;
		$meses = 0;
	}
	
	function verificaEmpresimo($salario, $prestacao, $meses){
		$this->salario = $salario;
		$this->prestacao = $prestacao;
		$this->meses = $meses;
		
		if($this->prestacao > ($this->salario * 0.2)){
			return false;
		}else{
			return true;
		}
	}
	
	function setSalario($salario){
		$this->salario = $salario;
	}
	function getSalario(){
		return $this->salario;
	}
	function setPrestacao($prestacao){
		$this->prestacao = $prestacao;
	}
	function getPrestacao(){
		return $this->prestacao;
	}	
	function setMeses($meses){
		$this->meses = $meses;
	}
	function getMeses(){
		return $this->meses;
	}	
}

?>