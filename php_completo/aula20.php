<?php

use Carro as GlobalCarro;

class Carro {
        var $tipo;
        /* Tipos de Carros:
            1 -> Passeio
            2 -> Esportivo
            3 -> Utilitário */
        var $velocidadeMaxima;
        var $velocidade;
        var $nome;
        var $ligado;
 
        function __construct ($tp, $no) {
            $this->ligado = false;
            $this->tipo = $tp;
            $this->nome = $no;
            $this->velocidade = 0;
            if ($tp == 1) {
                $this->velocidadeMaxima = 160;
            } else if ($tp == 2) {
                $this->velocidadeMaxima = 300;
            } else {
                $this->velocidadeMaxima = 100;
            }
        }

        function id () {
            echo("<hr>");
            echo("Nome: $this->nome<br>");

            if ($this->tipo == 1) {
                echo("Tipo: Carro de passeio.<br>");
            } else if ($this->tipo == 2) {
                echo("Tipo: Carro Esportivo.<br>");
            } else {
                echo("Tipo: Carro Utilitário.<br>");
            }
            
            echo("Velocidade Máxima: $this->velocidadeMaxima Km/h.<br>");

            if ($this->ligado) {
                echo("O carro está em funcionamento!<br>");
            } else {
                echo("O carro está estacionado!<br>");
            }

            echo("Velocidade Atual: $this->velocidade Km/h.<br>");
        }

        function ligar () {
            echo("<hr>");
            if ($this->ligado) {
                echo("O carro $this->nome já está ligado!<br>");
            } else {
                $this->ligado = true;
                echo("Carro $this->nome em funcionamento!");
            }
        }

        function desligar () {
            echo("<hr>");
            if ($this->ligado = false) {
                echo("O carro $this->nome já está desligado!<br>");
            } else {
                $this->ligado = false;
                echo("Desligando o carro $this->nome...<br>");
            }
        }

        function velocidade ($vel) {
            if ($vel > $this->velocidadeMaxima) {
                $this->velocidade = $this->velocidadeMaxima;
            } else {
                $this->velocidade = $vel;
            }
        }
    }

    $carroUm = new Carro (2, "Rapid");
    //var_dump($carroUm);
    $carroDois = new Carro (3, "Carregador");
    //var_dump($carroDois);
    $carroTres = new Carro (1, "Basic");
    //var_dump($carroTres);
    $carroQuatro = new Carro (2, "Veloz");
    //var_dump($carroQuatro);
    $carroCinco = new Carro (2, "Flecha");
    //var_dump($carroCinco);
    
    
    $carroUm->id();
    $carroDois->id();
    $carroTres->id();
    $carroQuatro->id();
    $carroCinco->id();
    
    $carroUm->ligar();
    $carroUm->id();

    $carroTres->ligar();
    $carroTres->velocidade(200);
    $carroTres->id();

    $carroCinco->ligar();
    $carroCinco->velocidade(275);
    $carroCinco->id();

    $carroUm->desligar();
    $carroUm->id();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 20 de PHP - Classe (Parte 01)</title>
</head>
<body>
    
</body>
</html>