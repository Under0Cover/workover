<?php

    $indice = 0;
    $tamanho = 5;
    $vetor = array($tamanho);

    for ($indice = 0; $indice < $tamanho; $indice++) {
        echo("Valor do índice: $indice<br/>");
    }

    echo("<hr>");

    for ($indice = 0; $indice < $tamanho; $indice++) {
        $vetor[$indice] = $indice * 3;
        echo("Valor da posição $indice: $vetor[$indice]<br/>");
    }

    echo("<hr>");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9 de PHP - FOR</title>
</head>
<body>
    
</body>
</html>