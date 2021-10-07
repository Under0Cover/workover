<?php

    function ola($nome, $periodo = 'Bom dia') {
        return "Olá, $nome! $periodo!<br>";
    }

    echo ola('Oliver');
    echo ola('', 'Boa noite');
    echo ola('João', 'Boa tarde');
    echo ola('Glaucio');

?>