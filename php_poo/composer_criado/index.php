<?php
require_once 'vendor/autoload.php';

// Após instalar as dependências no composer.json

use Cocur\Slugify\Slugify;

$slug = new Slugify();

echo $slug->slugify('Teste com acentuação');

// Só vai funcionar se dentro do composer.json estiver como require o cocur/slugify

// Podemos escolher qual será o "separador" utilizado

$xlug = new Slugify();

echo $xlug->slugify('Testando com outra opção de separador', '_');

// Há diversas de outras opções para se utilizar o Slugify

?>