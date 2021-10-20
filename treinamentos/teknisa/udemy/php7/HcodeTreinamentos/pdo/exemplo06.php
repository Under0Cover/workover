<?php

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "root");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

echo "Dados deletados com sucesso!";

$conn->rollBack();

echo '<hr>';
echo "RollBack feito com sucesso.";


?>