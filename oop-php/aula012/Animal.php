<?php
abstract class Animal {
	protected $idade;
	protected $membros;
	protected $peso;

	abstract function alimentar();
	abstract function emitirSom();
	abstract function locomover();

	public function getIdade() {
		return $this->idade;
	}

	public function setIdade($idade) {
		$this->idade = $idade;
	}

	public function getMembros() {
		return $this->membros;
	}

	public function setMembros($membros) {
		$this->membros = $membros;
	}

	public function getPeso() {
		return $this->peso;
	}

	public function setPeso($peso) {
		$this->peso = $peso;
	}


}