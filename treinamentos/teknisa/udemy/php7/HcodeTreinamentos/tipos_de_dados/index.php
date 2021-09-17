<?php

    // Camel Case 
    $anoNascimento = 1990;
    $nomeCompleto = "";

    // Números e Caracteres Especiais
    $nome1 = "João";
    $_nome = "";

    echo $nome1;
    echo "<hr>";

    // Função que "apaga o valor da variável, fazendo assim com que o PHP cuspa um notice
    unset($nome1, $anoNascimento);

    // Tratando o erro (proposital) do notice
    if (isset($nome1)) {
        echo $nome1;
    }

    // Concatenação
    echo "<hr>";
    $nome1 = "João";
    $sobrenome = "Rangel";

    $nomeCompleto = $nome1 ." ". $sobrenome;

    echo $nomeCompleto;

    // Tipos de Dados
    // Primeiro Grupo: Básicos
    
    // Segundo Grupo: Compostos

    // Terceiro Grupo: Especiais

?>