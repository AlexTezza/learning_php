<?php

// Não exibe Warnings na tela
error_reporting(E_ALL & ~E_NOTICE);

// Causando um Warning
$nome = $_GET["nome"];

echo $nome;

?>