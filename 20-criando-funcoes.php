<?php 
function exibirNome($nome) {
	print "Meu nome é $nome";
}

exibirNome("Matheus Eufrásio");

print "<hr>";

function calcMedia($nome, $n1, $n2, $n3, $n4) {
	$media = ($n1 + $n2 + $n3 + $n4) / 4;
	if ($media >= 7):
		print "$nome foi aprovado com a media $media <br>";
	else:
		print "$nome foi reprovado <br>";
	endif;
}

calcMedia("Bob", 1, 5, 6, 9);
calcMedia("Maria", 7, 7, 6, 8);