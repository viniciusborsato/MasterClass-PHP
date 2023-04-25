<?php
// Código da aula de hoje
// E-mail para dúvidas: vinicius@viniciusborsato.com

class Cidades {
	function __construct() {
		// echo "Testando...";
	}

	function pesquisa($cidade) {
		$opcoes = array('Votuporanga', 'Catanduva', 'Mirassol', 'São Paulo');

		if (!in_array($cidade, $opcoes)) 
			throw new Exception($cidade . " não encontrada na base de dados!");
	}
}

$cidade = new Cidades();

try {
	// Se a cidade for encontrada
	
	$cidade->pesquisa("São José do Rio Preto");

	echo "<h2>Cidade encontrada</h2>";
} catch (Exception $e) {
	// se não, gera o erro
	echo "<h2>Exceção Gerada: " . $e->getMessage() . "</h2>";
	echo "<h3>Linha do erro: " . $e->getLine() . "</h3>";
}
?>