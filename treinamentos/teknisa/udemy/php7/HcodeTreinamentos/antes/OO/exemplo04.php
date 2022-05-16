<?php

    class Endereco {
        private $logradouro;
        private $numero;
        private $bairro;
        private $cidade;
        private $estado;

        public function __construct($logradouro, $numero, $bairro, $cidade, $estado) {
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->estado = $estado;
        }

        public function __destruct() {
            var_dump('Destruir');
        }

        public function __toString() {
            return $this->logradouro.', '.$this->numero.' - '.$this->bairro.' - '.$this->cidade.' / '.$this->estado;
        }
    }

    $meuEndereco = new Endereco('Rua Ademar Saraiva Leao', '123', 'Centro', 'Santos', 'São Paulo');
    var_dump($meuEndereco);
    
    echo $meuEndereco;

    unset($meuEndereco);

?>