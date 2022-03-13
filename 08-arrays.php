<?php
// Arrays
$carro1 = "BMW";
$carro2 = "Veloster";
$carro3 = "Hilux";

$carros = array("BMW","Veloster","Hilux");
print_r($carros);
print "<hr>";
print $carros[0];
print "<hr>";
// Criando índices:
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
print $carros[2];
print "<hr>";

// Adicionando elementos:
$carros[5] = "Amarok";
print $carros[5];
print "<hr>";

// Criando arrays de outra forma:
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
print_r($motos);
print "<br>";
print $motos[5];
print "<hr>";
$clientes = ["Matheus", "Carla", "Roberto"];
print_r($clientes);
print "<hr>";

// Count
print count($carros);
print "<br>";
print count($clientes);
$totalClientes = count($clientes);
print "<hr>";

// Foreach
foreach ($carros as $valor) {
	print $valor."<br>";
}
print "<hr>";

// Arrays associativos:

$pessoas = array("nome"=> "Matheus", "idade"=> 22, "altura"=> 1.80);
print $pessoas["nome"];
$pessoas["cidade"] = "Itabuna";
print "<br>";
foreach($pessoas as $indice => $valor) {
	print $indice.": ".$valor."<br>";
}

// Arrays multidimencionais:
$times = array(
	"cariocas"=> array("campeão"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
	"paulistas"=> array("terceiro"=>"santos", "campeão"=>"são paulo", "vice"=>"palmeiras"),
	"baianos"=> array("bahia", "vitoria", "itabuna")
	);
print "<br>";
print $times["baianos"][0];
print "<br>";

foreach($times["cariocas"] as $indice => $valor) {
	print $indice.": ".$valor."<br>";
}

print "<br>";
foreach($times["paulistas"] as $indice => $valor) {
	print $indice.": ".$valor."<br>";
}

print "<br>";
foreach($times["baianos"] as $indice => $valor) {
	print $indice.": ".$valor."<br>";
}

print "<hr>";
$teste = array(
	"campeoes"=> array("Lux","Caitlyn","Jayce","Zed")
);
print $teste["campeoes"][0];
print "<br>";

foreach($teste["campeoes"] as $indice => $valor) {
	print $indice.": ".$valor."<br>";
}

$teste[4] = "Jhin";
print $teste[4];