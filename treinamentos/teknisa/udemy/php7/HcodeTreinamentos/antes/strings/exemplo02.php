<?php

    //Funções que envolvem variáveis
    $nome = 'joao rangel';
    echo $nome;
    echo '<hr>';

    //Deixando as letras em maiúsculas
    echo strtoupper($nome);
    echo '<hr>';

    //Deixando as letras em minúsculas
    $nome = strtoupper($nome); //Aqui deixando todas em maiúsculas para poder fazer o inverso
    //echo $nome;
    $nome = strtolower($nome);
    echo $nome;
    echo '<hr>';

    //Deixando apenas a primeira letra da string em maiúscula
    echo ucfirst($nome);
    echo '<hr>';
    
    //Deixando a primeira letra de cada palavra em maiúsculas
    echo ucwords($nome);

?>