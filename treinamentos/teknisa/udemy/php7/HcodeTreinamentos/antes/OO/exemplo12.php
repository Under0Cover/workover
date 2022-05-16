<?php

    function incluirClasses($nomeClasse) {
        if (file_exists($nomeClasse.'.php') === true) {
            require_once($nomeClasse.'.php');
        }
    }

    spl_autoload_register('incluirClasses');
    
    //Procurando em outra pasta
    spl_autoload_register(function($nomeClasse) {
        if (file_exists('abstrata'.DIRECTORY_SEPARATOR.$nomeClasse.'.php') === true) {
            require_once('abstrata'.DIRECTORY_SEPARATOR.$nomeClasse.'.php');
            //No caso do exemplo, a pasta foi denominada como 'abstrata'
        }
    });

    $carro = new delRey();
    $carro->acelerar(80);

?>