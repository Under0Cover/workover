<?php

    //Passagem de parâmetro por valor
    $a = 10;

    function trocaValor($b) {
        $b += 50;
        return $b;
    }

    echo $a;
    echo '<br>';
    echo trocaValor($a);
    echo '<br>';
    echo $a;

    echo '<hr>';
    //Passagem de parâmetro por referência

    $x = 10;

    function trocarValor(&$z) {
        $z += 50;
        return $z;
    }

    echo $x;
    echo '<br>';
    echo trocarValor($x);
    echo '<br>';
    echo trocarValor($x);
    echo '<br>';
    echo $x;

?>