<?php

    // Opções: 1 - Carro == 2 - Moto == 3 - Bicicleta == 4 -Navio == 5 - Avião
    $opcao = 6;

    switch ($opcao) {
        case 1:
            echo("Carro<br>");
            echo("Transporte terreste!");
            break;
        case 2:
            echo("Moto<br>");
            echo("Transporte terreste!");
            break;
        case 3:
            echo("Bicicleta<br>");
            echo("Transporte terreste!");
            break;
        case 4:
            echo("Navio<br>");
            echo("Transporte marítimo!");
            break;
        case 5:
            echo("Avião<br>");
            echo("Transporte aéreo!");
            break;
        default:
            echo("Meio de Transporte inválido!");
            break;
    }
    echo("<hr>");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 6 de PHP - Switch Case</title>
</head>
<body>
    
</body>
</html>