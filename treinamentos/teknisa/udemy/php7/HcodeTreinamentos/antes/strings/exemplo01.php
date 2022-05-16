<?php

    $nome = "HCode";
    $nome2 = 'Treinamentos';

    var_dump($nome, $nome2);
    echo '<hr>';

    /*
        Quando você utiliza aspas duplas para imprimir ou para concatenar em uma nova variável, o PHP vai exibir o valor da variável ao invés do nome da variável. Nesse modelo não é necessário utilizar o ponto '.' para concatenar as strings. Segue o exemplo:
    */
    echo "ABCDEFG $nome";

    echo '<hr>';
    /*
        No caso da utilização das aspas simples, a variável não será concatenada. Será impresso (ou adicionado em uma nova variável) todo o conteúdo digitado. Segue o exemplo:
    */
    echo 'ABCDEFG $nome';

    //O nome desse recurso é chamado de: Interpolação de variáveis.

?>