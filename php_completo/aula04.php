<?php

    //Arrays
    $vetores = array(7);
    $vetoresDois = array("nome" => "Bruno", "cidade" => "Belo Horizonte", "curso" => "PHP");

    $vetores[0] = "Carro";
    $vetores[1] = "Avião";
    $vetores[2] = "Navio";
    $vetores[3] = "Moto";
    $vetores[4] = "Ônibus";
    $vetores[5] = 123456;
    $vetores[6] = $vetoresDois["nome"];

    echo($vetores[0]."<br/>");
    echo($vetores[1]."<br/>");
    echo($vetores[2]."<br/>");
    echo($vetores[3]."<br/>");
    echo($vetores[4]."<br/>");
    echo($vetores[5]."<br/>");
    echo($vetores[6]."<br/>");

    echo("<hr>");
    echo("Nome: ".$vetoresDois["nome"].". Cidade: ".$vetoresDois["cidade"].", está fazendo o curso: ".$vetoresDois["curso"]);

    //Matrizes
    $matriz = array(
        array("Carro Modelo 1", 65000),
        array("Carro Modelo 2", 35000),
        array("Carro Modelo 3", 50000)
    );
    
    echo("<hr>");
    echo("Fiat: ".$matriz[0][0]." - Valor: ".$matriz[0][1]."<br/>");
    echo("Fiat: ".$matriz[1][0]." - Valor: ".$matriz[1][1]."<br/>");
    echo("Fiat: ".$matriz[2][0]." - Valor: ".$matriz[2][1]."<br/>");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 de PHP - Arrays (Vetores)</title>
</head>
<body>
    
</body>
</html>