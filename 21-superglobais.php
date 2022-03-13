<?php 
// Super Globais
/* 
	$GLOBALS
	$_SERVER               - extrai dados do servidor
	$_REQUEST
	$_POST                 - coletar dados de formulários
	$_GET                  - coletar dados de formulários
	$_FILES
	$_ENV
	$_COOK-IES
	$_SESSION
*/

$x = 10;
$y = 15;

function soma() {
	print $GLOBALS["x"] + $GLOBALS['y'];
}

soma();
print "<hr>";

print $_SERVER["PHP_SELF"]."<br>";
print $_SERVER["SERVER_NAME"]."<br>";
print $_SERVER["SCRIPT_FILENAME"]."<br>";
print $_SERVER["DOCUMENT_ROOT"]."<br>";
print $_SERVER["SERVER_PORT"]."<br>";
print $_SERVER["REMOTE_ADDR"]."<br>";