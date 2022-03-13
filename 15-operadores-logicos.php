<?php
// Operadores lógicos
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)  - quando apenas um valor da expressão é verdadeiro
// negação (!)

$idade = 25;
$nome = "Matheus";

if(($idade == 26) and ($nome == "Matheus")):
	print "É verdadeiro";
else:
	print "É falso";
endif;

print "<hr>";

if(($idade == 25) || ($nome == "Matheus")):
	print "É verdadeiro";
else:
	print "É falso";
endif;

print "<hr>";

if(($idade == 25) xor ($nome == "Matheus")):
	print "É verdadeiro";
else:
	print "É falso";
endif;

print "<hr>";

if(!($idade == 25) and ($nome == "Matheus")):
	print "É verdadeiro";
else:
	print "É falso";
endif;