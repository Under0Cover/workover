<?php

    require_once("config.php");

    /* PRIMEIRA PARTE: FAZENDO UM SELECT NA TABELA
    $sql = new Sql();
    $usuarios = $sql->select("SELECT * FROM tb_usuarios");

    echo json_encode($usuarios);
    */

    /* SEGUNDA PARTE: BUSCANDO UM USUÁRIO PELO ID
    $usuario = new Usuario();
    $usuario->loadById(2);
    echo $usuario;
    */

    /* TERCEIRA PARTE, PARTE 1: FAZENDO UM SELECT NA TABELA
    $lista = Usuario::getList();
    echo json_encode($lista);

    TERCEIRA PARTE, PARTE 2: CARREGA UMA LISTA DE USUÁRIOS BUSCANDO PELO LOGIN
    $search = Usuario::search('jo');
    echo json_encode($search);
    
    TERCEIRA PARTE, PARTE 3: TRAZER UM USUÁRIO AUTENTICADO POR LOGIN E SENHA
    $usuario = new Usuario();
    $usuario->login("jose", "qwerty");
    echo $usuario;
    */
    
    $aluno = new Usuario();
    $aluno->setDeslogin('aluno');
    $aluno->setDessenha('CR4ZY @1UN0');
    $aluno->insert();

    echo $aluno;



?>