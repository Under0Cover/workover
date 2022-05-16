<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Auto implements Veiculo {
    public function acelerar ($velocidade) {
        echo 'O veículo acelera até '.$velocidade.' Km/h';
    }

    public function frenar ($velocidade) {
        echo 'O veículo frenou até '.$velocidade.' Km/h';
    }

    public function trocarMarcha($marcha) {
        echo 'O veículo engatou a marcha '.$marcha;
    }
}

?>