<?php

    $conn = new PDO("sqlsrv:Database=dbphp7; server=localhost; ConnectionPooling=0", "teknisa", "teknisa");

    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

    $stmt->execute();

    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($resultado as $row) {
        foreach ($row as $key => $value) {
            echo "<strong>".$key.": </strong>".$value."<br>";
        }
        echo "====================================<br>";
    }

    var_dump($resultado);

?>