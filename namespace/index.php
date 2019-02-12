<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Alex Tezza");
$cad->setEmail("alex.tezza@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

// echo $cad;

?>