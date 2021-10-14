<?php

    function autoload($nomeClasse) {
        require_once('$nomeClasse.php');
    }


    $carro = new delRey();
    $carro->acelerar(80);

    //Apesar de não utilizada mais, vou seguir o exemplo da aula para fins didáticos.

?>