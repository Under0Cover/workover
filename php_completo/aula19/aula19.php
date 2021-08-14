<?php

    session_start();
    $_SESSION['vnome'] = 'Oliver';
    $_SESSION['vtexto'] = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis autem at, laborum dolorem officia quo magni aliquid ex pariatur nobis nihil beatae, rerum fugiat velit explicabo facere quisquam temporibus. Tenetur?';
    $_SESSION['vlog'] = 'S';

/*
    echo($_SESSION['vnome']);
    echo('<br>');
    echo($_SESSION['vtexto']);

*/
    
    if (isset($_SESSION['vcanal'])) {
        echo("<br>");
        echo($_SESSION['vcanal']);
    } else {
        echo("<br>A variável 'vcanal' não foi iniciada");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 19 de PHP - Sessão</title>
</head>
<body>
    <br>
    <a href="pagina1.php" target="_self">Página 1</a>
    <br>
    <a href="pagina2.php" target="_self">Página 2</a>
</body>
</html>