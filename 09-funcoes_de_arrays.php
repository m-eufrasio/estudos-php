<?php
$nomes = array("Rodrigo", "Felipe", "Maria", "José");
echo is_array($nomes);
print "<br>";
var_dump(is_array($nomes));
print "<br>";
if(is_array($nomes)):
	print "É um array";
else:
	print "Não é um array";
endif;
print "<br>";
print in_array("Felipe", $nomes);
print "<hr>";
$keys = array_keys($nomes);
print_r($keys);
print "<hr>";
$frutas = array("Uva", "Laranja", "Maça");
print_r($frutas);
array_unshift($frutas, "manga", "acerola", "morango");
print "<br>";
print_r($frutas);
print "<hr>";
array_push($frutas, "manga", "acerola", "morango");
print_r($frutas);
print "<hr>";
$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco", "Flamengo", "Botafogo");

$times = array_combine($keys, $values);
print_r($times);
print "<hr>";
$soma = array(5,9,8,3,5.2,9.3);
print array_sum($soma);
print "<br>";
$total = array_sum($soma);
print $total;
print "<hr>";
$data = "30/02/2018";
$novaData = explode('/', $data);
print_r($novaData);
print "<br>";
$frase = "Meu nome não é João";
$array = explode(" ", $frase);
print_r($array);
$nomes = array("Rodrigo", "Carlos", "Neusa", "Talita");
print "<br>";
$string = implode(",", $nomes);
print $string;