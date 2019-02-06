<?php

$a = 10;

function trocaValor($a) {
    $a += 50;
    return $a;
}

function trocaReferencia(&$a) {
    $a += 50;
    return $a;
}

echo trocaValor($a) . "<br>";
echo $a . "<br>";

echo trocaValor($a) . "<br>";
echo $a . "<br>";


?>