<?php

abstract class Animal {

    public function falar() {
        return "Som";
    }

    public function mover() {
        return 'Anda';
    }

}

class Cachorro extends Animal {

    public function falar() {
        return "Late";
    }

}

class Gato extends Animal {

    public function falar() {
        return "Mia";
    }

}

class Passaro extends Animal {

    public function falar() {
        return "Canta";
    }

    public function mover() {
        return "Voa e " . parent::mover();
    }

}


$pluto = new Cachorro();
echo "-----------------------------------<br />";
echo $pluto->falar() . "<br />";
echo $pluto->mover() . "<br />";


$garfield = new Gato();
echo "-----------------------------------<br />";
echo $garfield->falar() . "<br />";
echo $garfield->mover() . "<br />";


$andorinha = new Passaro();
echo "-----------------------------------<br />";
echo $andorinha->falar() . "<br />";
echo $andorinha->mover() . "<br />";

?>