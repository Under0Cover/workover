<?php

// Criando uma classe de 'objeto'
class Pessoa {
    // Atributos
    public $nome;
    public $idade;

    // Métodos ou Funções
    public function Falar() {
        echo "Falou";
    }

    // Características do objeto
    public function QuemEVoce() {
        // Para que possamos utilizar os atributos ou métodos dentro da mesma classe, precisamos utilizar o 'this' (este)
        echo "Eu sou o(a) ".$this -> nome." de ".$this -> idade." anos.";
    }
}

// Instânciando a classe Pessoa
$oliver = new Pessoa();
var_dump($oliver);

$oliver -> Falar();
// Falei mesmo. Rsrsrsrs

$oliver -> nome = 'Tales Oliver';
$oliver -> idade = 25;

var_dump($oliver);

echo $oliver -> nome;
echo "<br>";
echo "<br>";

$oliver -> QuemEVoce();


?>