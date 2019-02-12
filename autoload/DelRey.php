<?php

// Adicionado para fazer o exemplo-01 funcionar
// Removendo este método o exemplo-02 funciona normalmente
spl_autoload_register(function($nomeClasse) {

    if (file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php")) {
        require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }

});

class DelRey extends Automovel {

    public function empurrar() {

    }

}

?>