<?php

    function aula() {
        echo("<hr>Olá, Mundo do PHP!<br/>");
        echo("Aula sobre Funções.<hr>");
    }

    aula();

    function soma($numero1, $numero2) {
        $resultado = $numero1 + $numero2;
        echo("A soma de $numero1 e $numero2 é igual a $resultado<hr>");
    }

    soma(2,3);

    function somaRetorna($numero1, $numero2) {
        $resultado = $numero1 + $numero2;
        return $resultado;
    }

    $somado = somaRetorna(10, 5);
    echo("O resultado da soma com retorno é $somado");
    echo("<hr>");

    $notas = array(9, 8, 9.5, 9.9);
    function media($parametros) {
        $tamanho = count($parametros);
        $soma = 0;
        for ($indice =0; $indice < $tamanho; $indice++) {
            $soma += $parametros[$indice];
        }
        return ($soma / $tamanho);
    }

    $media = media($notas);
    echo("A média das notas do aluno é igual a $media");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 de PHP - Funções</title>
</head>
<body>
    
</body>
</html>