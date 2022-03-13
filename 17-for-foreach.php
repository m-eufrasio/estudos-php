<?php

for ($contador = 0; $contador <= 10; $contador++):
	print "O contador é $contador <br>";
endfor;

print("<br>");
for ($contador = 0; $contador <= 10; $contador++):
	print "8 x $contador = ".($contador * 8)."<br>";
endfor;

print "<hr>";

$cores = array("verde", "vermelho", "azul");
foreach($cores as $valor):
	print $valor."<br>";
endforeach; 

// Com os índices

$cores = array("verde", "vermelho", "azul");
foreach($cores as $indice => $valor):
	print $indice.": ".$valor."<br>";
endforeach; 