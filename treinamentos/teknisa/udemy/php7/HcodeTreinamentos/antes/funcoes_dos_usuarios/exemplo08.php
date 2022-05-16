<?php

    function soma(int ...$valores):string {
        return array_sum($valores);
    }

    echo var_dump(soma(2, 2));
    echo '<br>';
    echo soma(4, 5);
    echo '<br>';
    echo soma(3.5, 8.2);
    echo '<br>';

?>