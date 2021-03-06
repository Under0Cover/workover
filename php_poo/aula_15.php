<?php
// Relação entre os objetos: Associação
/*
	Acontece quando um objeto 'utiliza' outro, pórem, sem que eles dependam um do outro
*/

class Pedido {
	public $numero;
	public $cliente;
}

class Cliente {
	public $nome;
	public $endereco;
}

// Instanciando aqui

$rodrigo_oliveira = new Cliente();
$rodrigo_oliveira->nome = 'Rodrigo Oliveira';
$rodrigo_oliveira->endereco = 'Rua XxxX, Número: 177';
var_dump($rodrigo_oliveira);

// Instanciar a classe Pedido

$compra_rodrigo = new Pedido();
$compra_rodrigo->numero = 1;
// Aqui acontece a Associação
// O $cliente da $compra_rodrigo é o mesmo que o $rodrigo_oliveira
$compra_rodrigo->cliente = $rodrigo_oliveira;
var_dump($compra_rodrigo);
/* 
	Perceba que agora a variável $compra_rodrigo está composta por:
		- $compra_rodrigo->numero 
		- $compra_rodrigo->cliente
			Este cliente é subdivido em duas partes
				- $compra_rodrigo->cliente->nome
				- $compra_rodrigo->cliente->endereco
	
	Você pode acessar qualquer um dos objetos.
*/


// Caso você vá gravar no Banco de Dados, deve utilizar algo assim
$dados = array (
	'numero' => $compra_rodrigo->numero,
	'nome_cliente' => $compra_rodrigo->cliente->nome,
	'endereco_cliente' => $compra_rodrigo->cliente->endereco
);

var_dump($dados);

?>