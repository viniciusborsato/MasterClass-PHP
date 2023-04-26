<?php
	// Aula 102 - Gerando arquivo XLS
	// E-mail para dúvidas: vinicius@viniciusborsato.com

	$info = "";
	$info .= "<table border='1'>";
	$info .= "<tr>";
	$info .= "<th>ID</th>";
	$info .= "<th>NOME</th>";
	$info .= "<th>E-MAIL</th>";
	$info .= "</tr>";

	/***  Aqui seria o loop com a query pegando os dados contidos no DB ***/

	// Linha 1
	$info .= "<tr>";
	$info .= "<td>1</td>";
	$info .= "<td>Vinicius Borsato</td>";
	$info .= "<td>vinicius@viniciusborsato.com</td>";
	$info .= "</tr>";

	// Linha 2
	$info .= "<tr>";
	$info .= "<td>2</td>";
	$info .= "<td>Gabriel Silva</td>";
	$info .= "<td>gabriel@email.com</td>";
	$info .= "</tr>";

	// Linha 3
	$info .= "<tr>";
	$info .= "<td>3</td>";
	$info .= "<td>Pedro Ramos</td>";
	$info .= "<td>pedro@ramos.com.br</td>";
	$info .= "</tr>";

	/***  Fim do loop ***/

	$info .= "</table>";

	// Configuranado o header para forçar o download
	// ATENÇÃO: como passado em aula, muito CUIDADO e cautela com forçar downloads 
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;filename=planilha.xls");
	header("Cache-Control: no-cache, must-revalidate");
	header("Pragma: no-cache");

	// Imprime o conteúdo no arquivo 
	echo $info;
	
