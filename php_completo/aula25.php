<?php

abstract class AutomovelBase {
        public $cores;
        public $velocidade = 0;

        function __construct($cor) {
            $this->cores = $cor;
        }

        function status() {
            echo("<hr>");
            echo("Carro: $this->cores<br>");
            echo("Velocidade: $this->velocidade<br>");
            echo("<hr>");
        }

        final function Cor() {
            echo("<hr>");
            echo("Minha cor: $this->cores<br>");
            echo("Método original");
            echo("<hr>");
        }
    }

    class Automovel extends AutomovelBase {
        /*
        function Cor() {
            echo("<hr>");
            echo("Cor: $this->cores");
            echo("<hr>");
        }
        */
    }

    class Transporte extends AutomovelBase {
    }

    $carro = new Automovel("Vermelho");
    $trator = new Transporte("Azul");

    $carro->Cor();
    echo("<hr>");
    $trator->Cor();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 25 de PHP - Classe (Parte 06)</title>
</head>
<body>
    
</body>
</html>