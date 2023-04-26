<?php
/* Parte da introdução da Aula 63
** Disponibilizando apenas a parte solicitada
** Na próxima aula daremos continuidade em "Herança"
** E-mail para dúvidas: vinicius@viniciusborsato.com
*/

require("class.usuario.php");

$pessoa = new Usuario("Vinicius", 20);

$pessoa->mostraUsuario(); 

$pessoa->setNome("Vinicius Borsato Forte");
$pessoa->setIdade(37);

$pessoa->mostraUsuario();


?>