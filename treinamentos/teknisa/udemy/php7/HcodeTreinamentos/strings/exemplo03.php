<?php

    //Substituindo letras na string
    $empresa = 'Hcode';
    echo $empresa;
    echo '<hr>';

    $empresa = str_replace('o', '0', $empresa);
    echo $empresa;
    echo '<hr>';

    $empresa = str_replace('e', '3', $empresa);
    echo $empresa;

?>