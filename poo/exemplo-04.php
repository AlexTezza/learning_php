<?php

// Métodos Construtor, Destrutor e toString

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    // Método construtor
    public function __construct($logradouro, $numero, $cidade) {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
    }

    // Método destrutor
    public function __destruct() {
        var_dump("Destruir");
    }

    // Método que faz a serialização do objeto
    public function __toString() {
        return 
            $this->logradouro. ", ".
            $this->numero.", ".
            $this->cidade;
    }
}

$meuEndereco = new Endereco("Rua das Camélias", 720, "Cascavel");

var_dump($meuEndereco);
echo "<br>";

echo $meuEndereco;
echo "<br>";

// Maneira de chamar o método destrutor
unset($meuEndereco);


?>