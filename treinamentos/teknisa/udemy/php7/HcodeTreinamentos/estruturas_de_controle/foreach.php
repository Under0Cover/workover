<?php

    $meses = array(
        'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
    );

    // foreach simples, mostrando apenas o valor
    foreach ($meses as $mes) {
        echo "O mês é: ".$mes."<br>";
    }
    echo '<hr>';

    // foreach mostrando o indice e o valor
    foreach ($meses as $indice => $mes) {
        echo "Indice: ".$indice."<br>";
        echo "O mês é: ".$mes."<br><br>";
    }

?>