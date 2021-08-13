<?php

    $dia = date("d");
    $mes = date("m");
    $ano = date("Y");

    $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
    $gambiarra = $mes - 1;

    echo("$dia de $meses[$gambiarra] de $ano");

    $hora = date("H");
    $minuto = date("i");
    $segundo = date("s");

    echo("<br>");
    echo("$hora:$minuto:$segundo");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15 de PHP - Manipulação de Data e Hora</title>
</head>
<body>
    
</body>
</html>