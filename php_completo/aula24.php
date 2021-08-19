<?php

    class Carros {
        public $cores;
        public static $velocidade;

        function __construct($cor) {
            $this->cores = $cor;
            self::$velocidade = 0;
        }

        function mudarVelocidade($marcador) {
            self::$velocidade = $marcador;
        }

        function status() {
            echo("<hr>");
            echo("Cor: $this->cores<br>");
            echo("Velocidade: ".self::$velocidade. "<br>");
            echo("<hr>");
        }
    }

    $carroUm = new Carros("Vermelho");
    $carroDois = new Carros("Verde");
    $carroTres = new Carros("Azul");

    $carroUm->status();
    $carroDois->status();
    $carroTres->status();

    echo("<hr><hr>");
    echo("Velocidade Alterada do Carro 1");
    $carroUm->mudarVelocidade(100);
    $carroUm->status();
    $carroDois->status();
    $carroTres->status();
    
    echo("<hr><hr>");
    echo("Velocidade Alterada do Carro 2");
    $carroDois->mudarVelocidade(180);
    $carroUm->status();
    $carroDois->status();
    $carroTres->status();

    echo("<hr><hr>");
    echo("Velocidade Alterada do Carro 3");
    $carroTres->mudarVelocidade(200);
    $carroUm->status();
    $carroDois->status();
    $carroTres->status();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 24 de PHP - Classe (Parte 05)</title>
</head>
<body>
    
</body>
</html>