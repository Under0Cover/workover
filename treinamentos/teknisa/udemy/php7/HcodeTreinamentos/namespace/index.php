<?php

    //Trazendo o config.php
    require_once('config.php');

    //Sem essa linha, o Cadastro utilizado será o raiz. Com essa linha será o Cadastro do Cliente
    use Cliente\Cadastro;

    //Criando o 'objeto' cadastro
    $cad = new Cadastro();

    //Atribuindo os valores
    $cad->setNome('Djalma Sindeaux');
    $cad->setEmail('djalma@hcode.com.br');
    $cad->setSenha('123456');

    $cad->registrarVenda();

?>