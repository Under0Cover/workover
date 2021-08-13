<?php

    function aula($numero) {
        if ($numero != 0) {
            echo("Chamando Função Recursiva! $numero<br>");
            aula($numero - 1);
        }
    }

    aula(10);
    echo("<hr>");

    function fatorial($numero) {
        if ($numero < 0) {
            return -1;
        } 
        if ($numero <= 1) {
            return 1;
        }
            return $numero * fatorial($numero - 1);
    }

    echo("Fatorial de 4: ".fatorial(4));
    echo("<br>");
    echo("Fatorial de 5: ".fatorial(5));
    echo("<br>");
    echo("Fatorial de 6: ".fatorial(6));
    echo("<br>");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 de PHP - Funções Recursivas</title>
</head>
<body>
    
</body>
</html>