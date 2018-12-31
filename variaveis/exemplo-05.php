<?php

$nome = "Alex";

function teste() {
    // diz que a variável definida no escopo global será usada no escopo do método
    global $nome;
    echo $nome;
}

function teste2() {
    $nome = "Tezza";
    echo $nome . " agora no teste 2";
}

teste();

echo "<br />";

teste2();

?>