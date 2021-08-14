<?php

    $texto = "Curso de PHP";
    $nome = "Tales Oliver";
    $canal= "Canal do Oliver";
    echo("<a href=pagina1.php?tx=".urlencode($texto)."&no=".urlencode($nome)."&ca=".urlencode($canal)." target=_self>Abre Página 1</a>");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 18 de PHP - Passagem de valores pela URL</title>
</head>
<body>
    
</body>
</html>