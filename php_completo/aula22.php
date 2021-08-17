<?php

use Carro as GlobalCarro;

abstract class carroBase {
        public $potencia;
        public $velocidadeMaxima;
        public $portas;
        public $ligado = false;

        abstract function teste();

        function ligar () {
            $this->ligado = true;
        }

        function desligar () {
            $this->ligado = false;
        }

        function status () {
            echo("<hr>");
            echo("Potência: $this->potencia cv<br>");
            echo("Velocidade Máxima: $this->velocidadeMaxima Km/h<br>");
            echo("Portas: $this->portas<br>");
            if ($this->ligado) {
                echo("Carro em funcionamento.<br>");
            } else {
                echo("Carro estacionado.<br>");
            }
            echo("<hr>");
        }
    }

    class Carro extends carroBase {
        function __construct($pt, $vm, $po) {
            $this->potencia = $pt;
            $this->velocidadeMaxima = $vm;
            $this->portas = $po;

            $this->status();
        }

        function teste () {}
    }

    $carroUm = new Carro(150, 280, 4);
    $carroUm->ligar();
    $carroUm->status();

    $carroDois = new Carro (100, 180, 4);
    $carroTres = new Carro (88, 140, 2);
    $carroQuatro = new Carro (300, 380, 4);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 23 de PHP - Classe (Parte 03)</title>
</head>
<body>
    
</body>
</html>