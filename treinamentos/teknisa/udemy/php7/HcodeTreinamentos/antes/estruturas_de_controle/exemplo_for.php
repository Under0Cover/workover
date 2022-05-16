<?php

    //Para poder ver uma utilização do for de forma prática, vamos colocar um for como se fosse uma escolha de data de nascimento, dentro de uma tag html 'select'

    echo '<select>';

    for ($ano = date('Y'); $ano >= date('Y') - 100; $ano--) {
        echo '<option value="'.$ano.'">'.$ano.'</option>';
    }

    echo '</select>';

?>