<?php

// Criar o namespace do cadastro de cliente
namespace Cliente;

class Cadastro extends \Cadastro { // Extend da classe Cadastro raiz

    public function registrarVenda() {
        echo "Foi registrada uma venda para o cliente " . $this->getNome();
    }

}

?>