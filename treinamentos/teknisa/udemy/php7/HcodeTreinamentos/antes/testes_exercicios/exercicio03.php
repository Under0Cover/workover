<?php

    $valorProduto = 14500.00;
    $desconto = 5;

    //O exercício pede para aplicar 5% de desconto somente para os produtos cujo valor sejam acima de 10 000

/*
    // Letra a)
    if ($valorProduto < 10000) {
        echo $valorProduto = $valorProduto * ($desconto / 100);
    }
    // O enunciado pede desconto para ACIMA DE 10K o if tem a condição MENOR QUE 10K 
*/

/*
    // Letra b)
    if ($valorProduto > 10000) {
        echo $valorProduto = $valorProduto / ($desconto * 100);
    }
    // Aqui o erro é na matemática, né...
*/

/*
    // Letra c)
    if ($valorProduto > 0.05) {
        echo $valorProduto = $valorProduto * ($desconto / 100);
    }
    // Erro de lógica, né...
*/

/*
    // Letra d)
    if ($valorProduto < 5) {
        echo $valorProduto = $valorProduto * ($desconto / 100);
    }
    // Valor do Produto menor que 5?
*/

    // Letra e)
    if ($valorProduto > 10000) {
        echo $valorProduto = $valorProduto - ($valorProduto * ($desconto /100));
    }
    
?>