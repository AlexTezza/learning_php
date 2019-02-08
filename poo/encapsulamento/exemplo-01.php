<?php

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados() {
        echo $this->nome . "<br />";
        echo $this->idade . "<br />";
        echo $this->senha . "<br />";
    }

}

$objeto = new Pessoa();

echo $objeto->nome . "<br />";

// Não funciona, pois a propiedade é protegida,
// só quem esta dentro da própia classe ou quem herdar a classe tem acesso.
//  echo $objeto->idade . "<br />"; 

// Não funciona, pois a propiedade é protegida ,
// só quem esta dentro da própia classe tem acesso.
//  echo $objeto->senha . "<br />"; 

// Funciona porque o método verDados() esta dentro da classe e é público.
$objeto->verDados();

?>