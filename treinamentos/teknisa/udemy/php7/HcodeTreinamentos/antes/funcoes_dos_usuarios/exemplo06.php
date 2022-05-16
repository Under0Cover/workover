<?php

    $pessoa = array(
        'nome' => 'João',
        'idade' => 20
    );

    foreach ($pessoa as $value) {
        if (gettype($value) === 'integer') {
            $value += 10;
        }
        echo $value.'<br>';
    }

    echo 'forech sem apontar para a variável';
    echo '<br>';
    print_r($pessoa);
    echo '<hr>';

    foreach ($pessoa as &$value) {
        if (gettype($value) === 'integer') {
            $value += 10;
        }
        echo $value.'<br>';
    }

    echo 'foreach apontando para a variável';
    echo '<br>';
    print_r($pessoa);
    echo '<hr>';

?>