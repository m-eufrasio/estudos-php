<?php
/************ Escalares **********/

// String
$nome = "Olá mundo";
var_dump($nome);
if(is_string(456)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif;
echo "<hr>";

// int

$idade = 27;
var_dump($idade);
if(is_int(10.5)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;
echo "<hr>";

// float

$altura = 1.80;
var_dump($altura);
if(is_float($altura)):
	echo "É um número flutuante";
else:
	echo "Não é um número flutuante";
endif;
echo "<hr>";

// boolean
$admin = true;
var_dump($admin);
if(is_bool($admin)):
	echo "É booleano";
else:
	echo "Não é booleano";
endif;
echo "<hr>";

/************ Compostos **********/
$carros = array("Gol","Uno","Camaro",12,20.6,true );
var_dump($carros);
echo "<hr>";

// object

class Cliente {
	public $nome;
	public function atribuirNome($nome) {
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Matheus");
var_dump($cliente);

if(is_object($cliente)):
	echo "É um objeto";
else:
	echo "Não é um objeto";
endif;
echo "<hr>";

/************ Especiais **********/
// null
$cidade = NULL;
var_dump($cidade);

// resource

