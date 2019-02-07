<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getMotor():float { // Este cast é opcional
        return $this->motor;
    }

    public function setMotor($motor) {
        $this->motor = $motor;
    }

    public function getAno():int { // Este cast é opcional
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function exibir() {
        return array(
            "modelo"=> $this->getModelo(),
            "motor"=> $this->getMotor(),
            "ano"=> $this->getAno()
        );
    }

}

$carro = new Carro();
$carro->setModelo("Gol");
$carro->setMotor(1.6);
$carro->setAno("2019");

// var_dump($carro->exibir())
print_r($carro->exibir())


?>