<?php
	if($_POST) {
		$dados = $_POST["dados"];
	
		$fp = fopen("dados.txt", "a");
		
		fwrite($fp, $dados);
		
		fclose($fp);
	}	
	
	
