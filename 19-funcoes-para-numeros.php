<?php 
// Funcções para Números
/* 
	number_format     - realiza as formatações desejadas
	round             - arredonda valores
	ceil              - arredonda valores para cima
	floor             - arredonda valores para baixo
	rand
*/

$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
print "O valor do produto é $preco";
print "<hr>";

print round(3.6);
print "<br>";
print round(3.49);
print "<br>";
print ceil(8.1);
print "<br>";
print floor(8.90);
print rand(1,20);


