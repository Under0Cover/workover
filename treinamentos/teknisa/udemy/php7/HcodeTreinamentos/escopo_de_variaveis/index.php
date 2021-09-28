<?php
    // Escopo Global
    $nome = "Glaucio";

    function teste() {
        // Escopo da Função 'teste'
        global $nome;
        echo $nome.' no teste';
    }

    function teste2() {
        // Escopo da Função 'teste2'
        echo '<br>';
        $nome = 'João';
        echo $nome.' agora no teste2';
    }

    teste();
    teste2();

?>