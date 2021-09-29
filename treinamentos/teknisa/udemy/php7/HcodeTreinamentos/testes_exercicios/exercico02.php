<?php

    $name = 'Hcode Treinamentos';

    $replace = 'Cursos';

    //Objetivo do exercício: Mudar o valor da variável $name, alterando a palavra 'Treinamentos' por 'Cursos' (na variável $replace).

/*
    //Letra a)

    $new_name = substr($name, strpos($name, 'T'), $replace);
    echo $new_name;

    //Resposta: substr() expects parameter 3 to be integer
*/

/*
    //Letra b)

    $new_name = substr($name, 0, 'T') . $replace;
    echo $new_name;
    //Resposta: substr() expects parameter 3 to be integer
*/

    // Letra c)

    $new_name = substr($name, 0, strpos($name, 'T')) . $replace;
    echo $new_name;
    //Resposta correta

/*
    // Letra d)
    $new_name = str_replace('T', $replace, $name);
    echo $new_name;
    //Resposta: 'Hcode Cursosreinamentos'
*/

?>