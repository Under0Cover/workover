<?php

    //Operadores de Comparação
    //Comparações utilizando o igual
    $valor1 = 30;
    $valor2 = 55;
    $valor3 = 30.0;

    var_dump($valor1 > $valor2);
    echo '<hr>';
    var_dump($valor1 < $valor2);
    echo '<hr>';
    var_dump($valor1 == $valor2);
    echo '<hr>';
    var_dump($valor1 == $valor3);
    echo '<hr>';
    var_dump($valor1 === $valor3);
    echo '<hr>';

    // Comparações utilizando o diferente
    echo '<hr>';
    var_dump($valor1 != $valor3);
    echo '<hr>';
    var_dump($valor1 !== $valor3);
    echo '<hr>';

?>