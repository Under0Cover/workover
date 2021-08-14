<?php

    session_start();

    if ($_SESSION['vlog'] == 'S') {
        $_SESSION['vcanal'] = 'Canal do Oliver';

        echo("<h3>Segunda página</h3>");
        echo($_SESSION['vnome']);
        echo('<br>');
        echo($_SESSION['vtexto']);

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
    <a href="aula19.php" target="_self">Voltar ao início</a>
    <br>
    <a href="pagina2.php" target="_self">Página 2</a>
</body>
</html>

<?php
    } else {
        echo("Acesso indevido...");
    }
?>