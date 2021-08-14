<?php

    $dia = date("d");
    $mes = date("m");
    $ano = date("Y");

    $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
    $gambiarra = $mes - 1;

    echo("$dia de $meses[$gambiarra] de $ano");

    $hora = date("H");
    $minuto = date("i");
    $segundo = date("s");

    echo("<br>");
    echo("$hora:$minuto:$segundo");

?>