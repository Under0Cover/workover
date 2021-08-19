<?php

    interface CarroPadrao {
        function ligar();
        function desligar();
        function status();
        function acelerar();
        function freiar();
    }

    interface CarroGuerra {
        function atirarCanhao();
        function atirarMetralhadora();
    }

    abstract class CarroBase implements CarroPadrao, CarroGuerra {
        public $potencia;
        public $velocidadeMaxima;
        private $funcionamento = false;

        function ligar() {
            $this->funcionamento = true;
        }

        function desligar() {
            $this->funcionamento = false;
        }

        function status() {
            echo("<hr>");
            echo("Potência: $this->potencia cv.<br>");
            echo("Velocidade Máxima: $this->velocidadeMaxima Km/h.<br>");
            if ($this->funcionamento) {
                echo("Este carro está em funcionamento!<br>");
            } else {
                echo("Este carro não está em funcionamento!<br>");
            }
            echo("<hr>");
        }

        function acelerar() {}
        function freiar() {}
        function atirarCanhao() {}
        function atirarMetralhadora() {}

    }

    class Carro extends CarroBase {
        function Carro($pt, $vm) {
            $this->potencia = $pt;
            $this->velocidadeMaxima = $vm;

            $this->ligar();
            $this->status();
        }

        function teste() {}

    };

    $carroUm = new Carro(150, 280);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 24 de PHP - Classe (Parte 04)</title>
</head>
<body>
    
</body>
</html>
