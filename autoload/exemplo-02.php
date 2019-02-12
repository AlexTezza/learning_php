<?php

// https://secure.php.net/manual/pt_BR/function.spl-autoload-register.php

function incluirClasses($nomeClasse) {

    if (file_exists($nomeClasse.".php")) {
        require_once($nomeClasse.".php");
    }

}

// Duas formas de se usar o spl_autoload (Standard PHP Library)
spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse) {

    if (file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php")) {
        require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }

});

$carro = new DelRey();

$carro->acelerar(80);

?>