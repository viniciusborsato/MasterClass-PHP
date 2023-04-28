<?php
	// Não nos preocupamos com o CSS e o front-end em si
	// A ideia era criar o calendário básico puramente no arquivo PHP (sem foco no html e css)
	// vinicius@viniciusborsato.com

    $ano = isset($_GET['ano']) ? $_GET['ano'] : date('Y');
    $mes = isset($_GET['mes']) ? $_GET['mes'] : date('m');
    		
	$inicio_mes = date('w', mktime(0,0,0,$mes,1,$ano)) + 1;
	
	$fim_mes = date('t', mktime(0,0,0,$mes,1,$ano));
	
	switch($mes) {
        case 1: $mes_escrito = "Janeiro";
			break;
			
		case 2: $mes_escrito = "Fevereiro";
			break;
			
		case 3: $mes_escrito = "Março";
			break;
			
		case 4: $mes_escrito = "Abril";
			break;
			
		case 5: $mes_escrito = "Maio";
			break;
			
		case 6: $mes_escrito = "Junho";
			break;
			
		case 7: $mes_escrito = "Julho";
			break;
			
		case 8: $mes_escrito = "Agosto";
			break;
		
		case 9: $mes_escrito = "Setembro";
			break;
			
		case 10: $mes_escrito = "Outubro";
			break;
			
		case 11: $mes_escrito = "Novembro";
			break;
		
		case 12: $mes_escrito = "Dezembro";
			break;
	}
	
	echo "<table style='font: 1rem Trebuchet MS' cellpadding='5'>
			<caption><h3>" . $mes_escrito . " de " . $ano . "</h3></caption>
				<tr align='center' bgcolor='#E5E5E5'>
					<td>D</td><td>S</td><td>T</td><td>Q</td><td>Q</td><td>S</td><td>S</td>";

	$hoje = 1;
	
	echo "<tr>";
	
	for($i = 1; $i < $fim_mes + $inicio_mes; $i++) {
		if($hoje == date('d') && $mes == date('m') && $ano == date('Y'))
			$borda = "border: 1px inset black;";
		else
			$borda = "";
			
		if($i < $inicio_mes) {
			echo "<td></td>";
		}
		else {
			echo "<td bgcolor='#F5F5F5' style='" . $borda . "' align='center'>" . $hoje . "</td>";
		
			$hoje++;
		}
		
		if($i % 7 == 0)
			echo "</tr><tr>";
	}
	
	echo "</tr></table>";
	
	if($mes == 1) {
		$mes_ant = 12;
		$ano_ant = $ano - 1;
	}
	else {
		$mes_ant = $mes - 1;
		$ano_ant = $ano;
	}
	
	if($mes == 12) {
		$mes_pos = 1;
		$ano_pos = $ano + 1;
	}
	else {
		$mes_pos = $mes + 1;
		$ano_pos = $ano;
	}
	
	echo "<div style='padding: 20px'>";
	
	echo "<a style='text-decoration: none; margin:10px; font-size: 30px;' href='./?mes=" . $mes_ant . "&ano=" . $ano_ant . "'>◄</a>";

	echo "<a style='text-decoration:none; font-size: 30px;' href='./'>HOJE</a>";
	
	echo "<a style='text-decoration: none; margin:10px; font-size: 30px;' href='./?mes=" . $mes_pos . "&ano=" . $ano_pos . "'>►</a>";

	echo "</div>";
	
