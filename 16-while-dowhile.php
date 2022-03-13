<?php
// While & Do While

$contador = 1;
while($contador <= 10):
	print "Contator é $contador <br>";
	$contador++;
endwhile;

// Escrita alternativa do while (apenas nele)
/*$contador = 1;
while($contador <= 10) {
	print "Contator é $contador <br>";
	$contador++;
}*/

print "<hr>";

$contador = 1;

do {
	print "Contador é $contador <br>";
	$contador++;
} while($contador <= 10);