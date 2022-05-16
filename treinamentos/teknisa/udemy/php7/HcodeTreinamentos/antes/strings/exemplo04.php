<?php

    $frase = "A repetição é a mãe da retenção.";
    //Exibindo a $frase completa
    var_dump($frase);
    echo '<hr>';

    //Definindo a palavra que queremos procurar na string
    $palavra = "mãe";
    //Fazendo a consulta da $palavra na $frase
    $query = strpos($frase, $palavra);
    //Mostrando a posição da $palavra na $frase
    var_dump($query);
    echo '<hr>';

    //Pegando a string até a $palavra definida
    $texto = substr($frase, 0, $query); //(string completa, posição de início, posição da $palavra definida)
    //Exibindo o $texto até a $palavra definida
    var_dump($texto);
    echo '<hr>';

    //Pegando a string depois da $palavra definida
    $texto2 = substr($frase, $query + strlen($palavra), strlen($frase)); // Segue o modelo => (string completa, posição de início da query*, até onde ir?)
    // na parte do ($query + strlen ($palavra)) não queremos a exibição da $palavra
    var_dump($texto2);
    echo '<hr>';

    //Fazendo o modelo de exemplo acima, pórem, exibindo a $palavra definida
    $texto3 = substr($frase, $query, strlen($frase));
    //Exibindo a diferença do $texto2
    var_dump($texto3);
    echo '<hr>';

?>