<?php

// https://secure.php.net/manual/pt_BR/function.autoload.php

function __autoload($nomeClasse) {

    require_once("$nomeClasse.php");

}

$carro = new DelRey();

$carro->acelerar(80);

?>