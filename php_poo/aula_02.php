<?php

// Exemplo utilizando a classe com atributos públicos
class Login {
    public $email;
    public $senha;

    public function Logar() {
        if ($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "Logado com sucesso!";
        else:
            echo "Dados inválidos!";
        endif;
    }
}


// Utilização da classe com atributos públicos (Instanciando a classe)
$logar = new Login();
$logar->email = "teste@teste.com";
$logar->senha = "123456";
$logar->Logar();
echo "<br>";
echo "<hr>";
echo "<br>";


// Exemplo utilizando a classe com atributos privados
class Acessar {

    private $email;
    private $senha;

    // Nesse caso utilizamos os GETTERS e SETTERS
    // GETTERS  ->  Pegar
    // SETTERS  -> Setar

    // Aqui pega o valor do Email
    public function getEmail() {
        return $this->email;
    }

    // Aqui seta o valor do Email
    // Por padrão temos que passar o valor por parametro
    public function setEmail($valor) {
        // Filtragem:
        $filtro = filter_var($valor, FILTER_SANITIZE_EMAIL);
        //Agora aqui eu passo o valor do filtro para o E-mail
        $this->email = $filtro;
    }

    // Faremos a mesma coisa para a senha, pois o atributo senha também está em privado

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($valor) {
        $this->senha = $valor;
    }

    public function Acesso() {
        if ($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "Acesso permitido!";
        else:
            echo "Acesso negado!";
        endif;
    }
}


// Utilização da classe com atributos privados
$logar = new Acessar();
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->Acesso();

// Mostrando a funcionalidade do GETTERS (pegar):
echo "<br>";
echo "<hr>";
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();
echo "<br>";
echo "<hr>";
echo "<br>";


// PS: Uma das vantagens da utilização do SETTERS é a possibilidade de filtagrem de valores, no caso do exemplo, valores que não fazem parte de um E-mail válido 
// Veja um exemplo da utilização do filtro

$logar = new Acessar();
$logar->setEmail("teste/()@teste.com");
$logar->setSenha("123456");
$logar->Acesso();
echo "<br>";

// Exibindo o E-mail "passado" pelo usuário, após o filtro:
echo $logar->getEmail();