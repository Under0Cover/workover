<?php

    $valorEmail = $_POST['email_txt'];
    echo($valorEmail.'<br>');
    $valorAssunto = $_POST['assunto_txt'];
    echo($valorAssunto.'<br>');
    $valorMensagem = $_POST['mensagem_txt'];
    echo($valorMensagem.'<br>');

    /*

    if (mail($valorEmail, $valorAssunto, $valorMensagem, "From: talis.oliveira@hotmail.com.br\nReplay-To:talis.oliveira@hotmail.com.br")) {
        echo("Mensagem Enviada!<br>");
        echo("<a href=aula26.php target=_self>Voltar</a>");
    } else {
        echo("Erro ao enviar, tente novamente!");
    }

    */

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página PHP "ENVIAR.PHP"</title>
</head>
<body>
    
</body>
</html>