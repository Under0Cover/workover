<?php

    $conn = new PDO("sqlsrv:Database=dbphp7; server=localhost; ConnectionPooling=0", "teknisa", "teknisa");

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

    $login = "jose";
    $password = "1234567890";

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);

    $stmt->execute();

    echo "Inserido com sucesso!";

?>