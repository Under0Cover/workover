<?php

    // For simples
    for ($indice = 0; $indice < 10; $indice++) {
        echo $indice.'<br>';
    }

    echo '<hr>';
    echo '<hr>';
    echo '<hr>';

    // For com $indice alto e incremento de 5 em 5
    for ($indice = 0; $indice < 1000; $indice+=5) {
        echo $indice.'<br>';
    }

    echo '<hr>';
    echo '<hr>';
    echo '<hr>';

    //For com continue e if
    for ($indice = 0; $indice < 1000; $indice+=5) {
        //Não quero imprimir o $indice se ele estiver entre 200 e 800
        if ($indice > 200 && $indice < 800) {
            continue;
        }
        //Quando o if tem apenas uma instrução, não é necessário o uso das chaves, pórem, eu utilizo apenas para visualização de escopo
        echo $indice.'<br>';
    }

    echo '<hr>';
    echo '<hr>';
    echo '<hr>';
    
    //For com break e if
    for ($indice = 0; $indice < 1000; $indice+=5) {
        //Quando chegar em 900 eu quero sair do for
        if ($indice === 900) {
            break;
        }
        echo $indice.'<br>';
    }

?>