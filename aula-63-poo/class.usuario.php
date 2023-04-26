<?php
class Usuario {
	public $nome;
	public $idade;

	function __construct($nome, $idade) {
		$this->nome = $nome;
		$this->idade = $idade;
	}

	function setNome($nome) {
		$this->nome = $nome;
	}

	function getNome() {
		return $this->nome;
	}

	function setIdade($idade) {
		$this->idade = $idade;
	}

	function getIdade() {
		return $this->idade;
	}

	function mostraUsuario() {
		echo "Nome: " . $this->getNome() . "<br>";
		echo "Idade: " . $this->getIdade() . " anos<br>";
		echo "<hr>";
	}
}
?>