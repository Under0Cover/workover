<?php

    if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
        echo 'Não tem o MySqli instalado!!!';
    } else {
        echo 'MySqli está instalado!';
    }

    $conn = new mysqli('localhost', 'root', 'root', 'dbphp7');
    if ($conn->connect_error) {
        echo "Error: ".$conn->connect_error;
    }

    $resultado = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
    $data = array();

    while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
        array_push($data, $row);
    }

    echo json_encode($data);


?>