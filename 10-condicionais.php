<?php
// IF e ELSE
$numero = 8;
if ($numero == 15):
	print "É igual a 10";
elseif($numero <= 9):
	print "É menor ou igual a 9";
else:
	print "É diferente de 10";
endif;
print "<hr>";

$media = 5;
print ($media >= 7) ? "Aprovado!" : "Reprovado!";
print "<br>";
// SWITCH CASE

$cor = "asdfsaas";

switch ($cor):
	case "vermelho":
	print "Sua cor preferida é o vermelho";
	break;

	case "verde":
	print "Sua cor preferida é o verde";
	break;

	case "azul":
	print "Sua cor preferida é azul";
	break;

	default:
	print "Sua cor preferida não é nenhuma das 3 citadas";

endswitch;