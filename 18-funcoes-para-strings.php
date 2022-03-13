<?php 
// Funções para String
/*  strtoupper
    strtlower
    substr
    str_pad
    str_repeat
    strlen
    str_replace
    strpos
*/

$nome = "Matheus Eufrasio";
$novoNome = strtoupper($nome);
print $novoNome;
print "<br>";
$novoNome = strtolower($nome);
print $novoNome;
print "<hr>";

$mensagem = "Olá mundo";
print substr($mensagem, 4);
print "<br>";
print substr($mensagem, 4, 5);
print "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7);
print $novoObjeto;
print "<br>";
$novoObjeto = str_pad($objeto, 7, "**");
print $novoObjeto;
print "<br>";
$novoObjeto = str_pad($objeto, 7, "**", STR_PAD_LEFT);
print $novoObjeto;
print "<br>";
$novoObjeto = str_pad($objeto, 7, "**", STR_PAD_BOTH);
print $novoObjeto;
print "<hr>";

$string = str_repeat("Sucesso!", 5);
print $string; 
print "<hr>";

print strlen($mensagem);
print "<hr>";

$texto = "A seleção SERÉBA será campeã da copa do mundo 2022";
print $texto;
print "<br>";
$novoTexto = str_replace("SERÉBA", "BULUI", $texto);
print $novoTexto;
print "<hr>";

print strpos($texto, "copa");
