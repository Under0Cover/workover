<?php
    // Também conhecidas como Array Super Globais

    // Adicionar ao fim da URL: /index.php?a=123

    $nome = (int)$_GET["a"];
    // Só não ficou legal uma variável com o nome de 'nome' como 'inteiro'
    var_dump($nome);

    // Consultando o IP do usuário
    $ip = $_SERVER['REMOTE_ADDR'];
    echo $ip;

    echo "<br>";
    echo "<br>";
    
    // Consultando as páginas visitadas
    $visitas = $_SERVER['SCRIPT_NAME'];
    echo $visitas;
?>