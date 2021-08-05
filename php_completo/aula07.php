<?php

    $indice = 0;
    $tamanho = 10;
    $vetor = array($tamanho);

    while ($indice < $tamanho) {
        echo("Valor da variável índice: $indice<br/>");
        $indice++;
    }

    echo("<hr>");
    // while para percorrer o array
    $indice = 0;

    while ($indice < $tamanho) {
        $vetor[$indice] = $indice;
        echo("$vetor[$indice]<br>");
        $indice++;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7 de PHP - While</title>
</head>
<body>
    
</body>
</html>