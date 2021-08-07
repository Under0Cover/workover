<?php

    $indice = 0;
    $tamanho = 3;

    echo("Loop Do While");
    do {
        echo("<pre>A variável de indíce tem o valor de $indice<br/>");
        echo("A variável de tamanho tem o valor de $tamanho</pre>");
        $indice++;
    } while ($indice < $tamanho);

    echo("<hr>");
    $indice = 0;

    echo("Loop While");
    while ($indice < $tamanho) {
        echo("<pre>A variável de indíce tem o valor de $indice<br/>");
        echo("A variável de tamanho tem o valor de $tamanho</pre><br/>");
        $indice++;
    }
    
    echo("<hr>");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8 de PHP - Do While</title>
</head>
<body>
    
</body>
</html>