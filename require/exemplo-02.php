<?php

// Require obriga que o arquivo exista e que esteja funcionando corretamente
// Caso contrário será lançada uma exceção.
require "req/exemplo-01.php";

// Para evitar o require de arquivos repetidas vezes e causar o lançamento de exceções
// existe o require_once. ex:
//  require_once "req/exemplo-01.php";
//  require_once "req/exemplo-01.php";
// Neste caso não irá gerar exceção porque o segundo require será desconsiderado

$resultado = somar(10, 30);

echo $resultado;

?>