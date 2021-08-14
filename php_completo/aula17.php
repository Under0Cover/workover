<?php

    /*
    $aula = NULL;

    if (isset($aula)) {
        echo("Variável 'aula' foi definida!");
    } else {
        echo("Variável 'aula' não foi definida!");
    }
    */

    if (isset($_POST["f_nome"]) && ($_POST["f_nome"] != "")) {
        // Tratativa para o 'f_nome' não vir vazio.
        $vnome = $_POST["f_nome"];
        echo("Nome: $vnome<br>");
    } else {
        echo("Por favor preencha o formulário corretamente!");
    // O fechamento do else está no final do arquivo. Assim, quando o formulário for enviado, não irá aparecer novamente.

    echo("<hr>");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17 de PHP - Isset</title>
</head>
<body>
    <form action="aula17.php" name="f_aula" method="post">
        <label>Nome:</label><br>
        <input type="text" name="f_nome"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
    }
?>