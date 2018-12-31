<?php

$nome = (int)$_GET["a"]; // Array super global
// Testar com a seguinte URL: 
// http://localhost/variaveis/exemplo-04.php?a=34

// var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

echo "<br />";

$scriptName = $_SERVER["SCRIPT_NAME"];
echo $scriptName;

?>