<?php

    class aula {
        protected $variavelUm = "Bom dia";
        protected $variavelDois = "talis.oliveira@hotmail.com.br";
        protected $variavelTres = "www.google.com.br";

        function escrever() {
            echo("Método da classe aula<br>");
            echo("$this->variavelUm<br>");
            echo("$this->variavelDois<br>");
            echo("$this->variavelTres<br>");
            echo("<hr>");
        }
    }

    
    class canal extends aula {
        var $variavelCanalUm = "Curso de PHP";
        var $variavelCanalDois = "Tales Oliver";

        function escreverDois () {
            echo("Método da classe canal<br>");
            echo("$this->variavelCanalUm<br>");
            echo("$this->variavelCanalDois<br>");
            echo("$this->variavelUm<br>");
            echo("$this->variavelDois<br>");
            echo("$this->variavelTres<br>");
        }
    }
    
    $aulaObjeto = new aula();
    $canalObjeto = new canal();

    $aulaObjeto->escrever();
    //$canalObjeto->escrever();
    $canalObjeto->escreverDois();
    //echo("$aulaObjeto->variavelTres");
    echo("<hr>");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 21 de PHP - Classe (Parte 02)</title>
</head>
<body>
    
</body>
</html>