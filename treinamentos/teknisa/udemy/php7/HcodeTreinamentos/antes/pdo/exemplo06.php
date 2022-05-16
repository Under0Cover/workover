<?php

$conn = new PDO("sqlsrv:Database=dbphp7; server=localhost; ConnectionPooling=0", "teknisa", "teknisa");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

echo "Dados deletados com sucesso!";

$conn->rollBack();

echo '<hr>';
echo "RollBack feito com sucesso.";


?>