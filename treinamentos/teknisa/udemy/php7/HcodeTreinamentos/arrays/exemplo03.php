<?php

    $pessoas = array();

    //Adicionando itens no array depois de ele ser criado
    array_push($pessoas, array(
        'nome' => 'João',
        'idade' => 20
    ));

    //Adicionando outro item no array
    array_push($pessoas, array(
        'nome' => 'Glaucio',
        'idade' => 25
    ));

    //Printando o array
    print_r($pessoas);

    echo '<br>';
    //Printando o index 0
    print_r($pessoas[0]);

    echo '<br>';
    //Printando uma chave específica do index [0]
    print_r($pessoas[0]['nome']);

?>