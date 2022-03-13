<?php
// Constantes
define("NOME", "Matheus Eufrásio");
echo NOME;
define("IDADE", "22");
define("ALTURA", "1.80");
define("CASADO", false);
define("TIMES", ['vasco', 'flamengo', 'santos']);

var_dump(CASADO);

echo "Meu nome é: ".NOME." e minha idade é ".IDADE." e minha altura é de ".ALTURA;
echo "<hr>";
echo TIMES[1];
var_dump(TIMES);

function exibeNome() {
	echo NOME;
}

exibeNome();

// Constantes são automaticamente globais