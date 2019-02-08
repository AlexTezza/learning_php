<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo {

    public function acelerar($velocidade) {
        echo "O veículo acelerou até " . $velocidade . " km/h";
    }

    public function frear($velocidade) {
        echo "O veículo frenou até " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha) {
        echo "O veículo engatou a marcha " . $marcha;
    }

}

$carro = new Civic();
$carro->acelerar(120);
echo "<br />";
$carro->frear(60);
echo "<br />";
$carro->trocarMarcha(4);
echo "<br />";

?>