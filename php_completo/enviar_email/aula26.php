<?php
    /* Observação: O arquivo apresenta erros.
        Eu não queria ficar mudando muito as configurações, pois eu estou usando o ambiente que utilizo no trabalho.
        Mas o código, está apresentado conforme a vídeo aula.
        Para um melhor funcionamento, execute as configurações certas como exemplicado pelo Professor.
    */
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 26 de PHP - Enviando E-mail</title>
</head>
<body>
    <form action="envia.php" name="email" method="post">
        <label>E-mail</label><br>
        <input type="email" name="email_txt" id=""><br>
        <label for="">Assunto</label><br>
        <input type="text" name="assunto_txt" id=""><br>
        <label for="">Mensagem</label><br>
        <textarea name="mensagem_txt" id="" cols="50" rows="5"></textarea><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>