<?php

   $tranporte = array("Carro", "Moto", "Bicicleta", "Ônibus", "Avião", "Navio");

   foreach ($tranporte as $veiculo) {
       echo("$veiculo<br/>");
        if ($veiculo == "Bicicleta") {
           break;
       } 
   }

   echo("<hr>");

   foreach ($tranporte as $veiculo) {
       if ($veiculo == "Bicicleta") {
           echo("Bicleta está na lista de veículos");
           echo("<br/>");
       }

       if ($veiculo == "Avião") {
           echo("Avião está na lista de veículos");
           echo("<br/>");
       }
   }

   echo("<hr>");

   foreach ($tranporte as $veiculo) {
       if ($veiculo == "Carro") {
           echo("O carro é um transporte terreste.<br/>");
       } else if ($veiculo == "Moto") {
           echo("A moto é um transporte terreste.<br/>");
       } else if ($veiculo == "Bicicleta") {
           echo("A bicicleta é um transporte terreste.<br/>");
       } else if ($veiculo == "Ônibus") {
           echo("O ônibus é um transporte terreste.<br/>");
       } else if ($veiculo == "Avião") {
           echo("O avião é um transporte aéreo.<br/>");
       } else if ($veiculo == "Navio") {
           echo("O navio é um transporte marítimo ");
       } else {
           echo("O meio de transporte não foi encontrado");
       }
   }

   echo("<hr>");
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 de PHP - FOREACH</title>
</head>
<body>
    
</body>
</html>