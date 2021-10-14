<?php

    abstract class Animal {
        public function falar() {
            return 'Som';
        }

        public function mover() {
            return 'Andar';
        }
    }

    class Cachorro extends Animal {
        public function falar() {
            return 'Latir';
        }
    }

    $pluto = new Cachorro();
    echo $pluto->falar().'<br>';
    echo $pluto->mover().'<br>';

    class Gato extends Animal {
        public function falar() {
            return 'Miar';
        }
    }

    echo '<hr>';
    $garfield = new Gato();
    echo $garfield->falar().'<br>';
    echo $garfield->mover().'<br>';

    class Passaro extends Animal {
        public function falar() {
            return 'Cantar';
        }

        public function mover() {
            return 'Voar e '.parent::mover();
        }
    }

    echo '<hr>';
    $bentivi = new Passaro();
    echo $bentivi->falar().'<br>';
    echo $bentivi->mover().'<br>';

?>