<?php

    //Estrutura de controle de fluxo ou Comandos de decisão
    //Comando IF

    $qualASuaIdade = 17;
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;

    if ($qualASuaIdade < $idadeCrianca) {
        echo 'Criança';
    } else if ($qualASuaIdade < $idadeMaior) {
        echo 'Adolescente';
    } else if ($qualASuaIdade < $idadeMelhor) {
        echo 'Adulto';
    } else {
        echo 'Idoso';
    }

    echo '<hr>';
    //Utilizando o Operador Ternário
    echo ($qualASuaIdade < $idadeMaior) ? 'Menor de idade' : 'Maior de idade'
?>