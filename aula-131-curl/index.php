<?php
	// Aula 131 - cURL
	// vinicius@viniciusborsato.com

	$ch = curl_init();
	
	$enviar = array('dados' => 'Escrevendo isso por cURL no arquivo texto externo.');
	
	curl_setopt($ch, CURLOPT_URL, 'http://localhost/aula-131-curl/arquivo-externo.php');
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $enviar);
	curl_exec($ch);

	echo "Dados enviados com sucesso!";
	
	
