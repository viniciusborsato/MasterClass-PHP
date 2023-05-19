<?php
	$carros = array('Ferrari', 'Fusca', 'Gol');
    
	print_r($carros);
	
	echo "<br><br>";
	
	echo "Segundo registro do Array:<br>";
	echo $carros[1];

	echo "<br><br>";
	
	echo "merge:<br>";
	print_r(array_merge($carros, array('Golf', 'Cruze')));

	echo "<br><br>";
	
	echo "push:<br>";
	print_r(array_push($carros, "Audi", "Porsche"));
	
	echo "<br><br>";
	
	echo "rand:<br>";
	print_r(array_rand($carros));

	echo "<br><br>";
	
	echo "shuffle:<br>";
	print_r(shuffle($carros));

	echo "<br><br>";
	
	echo "exists:<br>";
	print_r(array_key_exists(3, $carros));
	
	echo "<br><br>";
	
	echo "in_array:<br>";
	echo in_array('Kombi', $carros) ? "Existe Kombi" : "Não tem Kombi";
	
	echo "<br><br>";	
	
	echo "search:<br>";
	print_r(array_search('Gol', $carros));

	echo "<br><br>";	
	
	echo "sort:<br>";
	print_r(sort($carros));
	
	echo "<br><br>";
	
	echo "count:<br>";
	print_r(count($carros));	
	
	echo "<br><br>";	

	$array["Nome"] = "Vinicius Borsato";
	$array["Email"] = "vinicius@viniciusborsato.com";
	$array["Idade"] = "37 anos";
	
	foreach ($array as $rotulo => $dado) {
		echo $rotulo . ": " .  $dado . "<br>";
	}