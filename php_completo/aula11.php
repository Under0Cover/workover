<?php

    $vetor = array("Mouse", "Teclado", "Monitor", "Memória RAM", "HD", "SSD", "Sair", "Microfone", "Impressora", "Hadset");
    $tamanho = count($vetor);
    $indice = 0;

    echo("Loop While");
    echo("<hr>");
    echo("<hr>");
    while ($indice < $tamanho) {
        echo("$vetor[$indice]<br/>");
        $indice++;
        if ($vetor[$indice] == "Sair") {
            break;
        }
    }

    echo("<hr>");
    
    echo("Loop For<br/>");
    echo("<hr>");
    echo("<hr>");
    for ($indice = 0; $indice < $tamanho; $indice++) {
        if ($vetor[$indice] == "Sair") {
            break;
        }
        echo("$vetor[$indice]<br/>");
    }

    echo("<hr>");

    echo("Loop Foreach<br/>");
    echo("<hr>");
    echo("<hr>");
    foreach($vetor as $pecas) {
        if ($pecas == "Sair") {
            break;
        }
        echo("$pecas<br/>");
    }
    // Tanto no For quanto no Foreach o IF tem que ficar antes do echo, pois se ficar igual no while, a string "Sair", vai ser impressa na tela.

    echo("<hr>");

    echo("Loop Do While<br/>");
    $indice = 0;
    echo("<hr>");
    echo("<hr>");
    do {
        echo("$vetor[$indice]<br/>");
        $indice++;
        if ($vetor[$indice] == "Sair") {
            break;
        }
    } while ($indice < $tamanho);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 de PHP - Break</title>
</head>
<body>
    
</body>
</html>