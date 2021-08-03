<?php

    //Variáveis
    $vnome = "Bruno";
    $vnumero = 10;
    $vnumerofloat = 20.5;
    $vsoma = 0;

    //Constante
    define("cnome","Bruno");
    define("versao", PHP_VERSION);
    define("diretorio", __DIR__);

    echo("Nome: $vnome<br/>");
    $vnome = "Campos";
    echo("Nome: $vnome<br/>");
    $vnome = "Bruno<br/>";
    echo("Nome: ".$vnome);
    $vsoma = $vnumero + $vnumerofloat;
    echo("Soma: $vsoma<br/>");

    echo("<hr>");
    echo("Constante cnome: ".cnome."<br/>");
    echo("Nome do arquivo: ".__FILE__."<br/>");
    echo("Versão do PHP: ".versao."<br/>");
    echo("Diretório do PHP: ".diretorio."<br/>");

    // Constantes pré-definidas pelo PHP sem usar o 'define'
    echo("<hr>");
    echo("Versão do SO: ".PHP_OS."<br/>");
    echo("Número da linha: ".__LINE__."<br/>");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 de PHP - Constantes e Variáveis</title>
</head>
<body>
    
</body>
</html>