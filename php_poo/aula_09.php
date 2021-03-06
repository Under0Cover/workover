<?php
// Métodos e Atributos estáticos

class Logar {
	public static $user;
	
	public static function verificarLogin() {
		// O $this não funciona em com membros estáticos
		echo "O usuário ".self::$user." está logado!";
	}
	

	// Você ainda pode usar os métodos e atributos não estáticos 
	public function sairSistema() {
		echo "O usuário ".self::$user." está deslogado!";
	}
}

// Quando o método estático é utilizado, não tem que fazer a instância da classe
// $usuario = new Login();

// Basta apenas declarar o nome da classe e chamar o método
// Login::verificarLogin();

// Para atribuir um valor ao atríbuto estático basta seguir a mesma ideia
Logar::$user = 'admin';

Logar::verificarLogin();

echo '<hr>';

// Com metodos não estáticos, devemos instanciar a classe
$logar = new Logar();
$logar->sairSistema();

echo '<hr>';

?>