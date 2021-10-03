<?php

    // Aplicar uma regra onde se a variável $status for verdadeira, a variável $liberado recebe o valor 1, senão $liberado deve receber 0

    $status;
    $liberado;

/*
    // Letra a)
    if ($status == true) {
        $liberado = 1;
    }

    if ($status == false) {
        $liberado = 1;
    }
    // Né?!
*/

/*
    // Letra b)
    if [$status] {
        $liberado = 1;
    } else {
        $liberado = 1;
    }
    // Dois erros....
*/

    //Letra c)
    if ($status == true) {
        $liberado = 1;
    } else {
        $liberado = 0;
    }
    // Resposta correta

/*
    //Letra d)
    if ($status) {
        $liberado = 1;
    } else ($status == false)
        $liberado = 1;
    }
    //No else não se usa mais a verificação
*/

/*
    if ($status) {
        $liberado = 1;
    }
    if ($status == false) {
        $liberado = 1;
    }
    //Desnecessário 2 ifs, fora o outro erro
*/

?>