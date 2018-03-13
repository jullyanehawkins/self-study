<?php
class ContaBanco {
	//Atributos
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	//Métodos
	public function abrirConta($t) {
		$this->settipo($t);
		$this->setstatus(true);
		if($t == "CC"){
			$this->setsaldo(50);
		} elseif($t == "CP"){
			$this->setsaldo(150);
		}
	}

	public function fecharConta() {
		if($this->getsaldo()>0) {
			echo "Conta com dinheiro";
		} elseif($this->getsaldo()<0) {
			echo "Conta em débito";
		} else {
			$this->setStatus(false);
			echo "<p>Conta encerrada com sucesso</p>";
		}
	}

	public function depositar($v) {
		if($this->getstatus() == true) {
			$this->setsaldo($this->getsaldo()+$v);
			echo "<p>Depósito de $ $v autorizado</p>";
		} else{
			echo "Impossível depositar";
		}
	}

	public function sacar($v) {
		if($this->getstatus()){
			if($this->getsaldo()>=$v){
				$this->setsaldo($this->getsaldo()-$v);
				echo "<p>Saque de $ $v autorizado</p>";
			} else{
				echo "<p>Saldo insuficiente</p>";
			}
		} else{
			echo "<p>Impossível sacar</p>";
		}
	}

	public function pagarMensal() {
		if($this->gettipo() == "CC"){
			$v = 12;
		} elseif($this->gettipo() == "CP"){
			$v = 20;
		}
		if($this->getstatus()){
			$this->setsaldo($this->getsaldo()-$v);
			echo "<p>Mensalidade de $ $v paga</p>";
		} else {
			echo "<p>Problemas com a conta. Não posso cobrar</p>";
		}
	}

	//Métodos Especiais
	public function __construct() { //Método Construct
		$this->setsaldo(0);
		$this->setstatus(false);
		echo "<p>Conta criada com sucesso</p>";
	}

	public function getnumConta() {
		return $this->numConta;
	}

	public function setnumConta($n) {
		$this->numConta = $n;
	}

	public function gettipo() {
		return $this->tipo;
	}

	public function settipo($t) {
		$this->tipo = $t;
	}

	public function getdono() {
		return $this->dono;
	}

	public function setdono($d) {
		$this->dono = $d;
	}

	public function getsaldo() {
		return $this->saldo;
	}

	public function setsaldo($s) {
		$this->saldo = $s;
	}

	public function getstatus() {
		return $this->status;
	}

	public function setstatus($s) {
		$this->status = $s;
	}
}