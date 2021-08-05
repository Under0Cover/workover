<?php

    $media = 25;

    if ($media >= 70 ) {
        echo("Aprovado!");
    } else if ($media >= 60 ) {
        echo("Recuperação!");
    } else {
        echo("Reprovado!");
    }

    if(($media >= 40) && ($media <= 60)) {
        echo("<hr>Aluno selecionado!");
    } else {
        echo("<hr>Aluno fora da faixa!");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 de PHP - Condicional IF / ELSE</title>
</head>
<body>
    
</body>
</html>