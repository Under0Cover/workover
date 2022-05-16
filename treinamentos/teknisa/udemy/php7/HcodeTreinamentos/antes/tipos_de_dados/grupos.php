<?php

    // Tipos Básicos - Primeiro Grupo
    // String
    $nome = "HCode";
    $site = 'www.hcode.com.br';

    // Números
    $ano = 1990;

    // Float
    $salario = 5500.99;

    // Boleano
    $bloqueado = False;


    // Tipos Compostos - Segundo Grupo
    // Array
    $frutas = array("abacaxi", "laranja", "manga");

    echo $frutas[2];

    // Objeto
    $nascimento = new DateTime();

    var_dump($nascimento);


    // Tipos Especiais - Terceiro Grupo
    // Resource
    $arquivo = fopen("grupos.php", "r");

    var_dump($arquivo);

    // Nulo
    $nulo = null;
    $vazio = "";

?>