<?php

    class Usuario {
        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;

        //Get Id Usuario
        public function getIdUsuario(){
            return $this->idusuario;
        }

        //Set Id Usuario
        public function setIdUsuario($value) {
            $this->idusuario = $value;
        }

        //Get Deslogin
        public function getDesLogin(){
            return $this->deslogin;
        }

        //Set Deslogin
        public function setDesLogin($value){
            $this->deslogin = $value;
        }

        //Get Dessenha
        public function getDesSenha(){
            return $this->dessenha;
        }

        //Set Dessenha
        public function setDesSenha($value){
            $this->dessenha = $value;
        }

        //Get Dtcadastro
        public function getDtCadastro(){
            return $this->dtcadastro;
        }

        //Set Dtcadastro
        public function setDtCadastro($value){
            $this->dtcadastro = $value;
        }

        //Método para trazer os cadastros pelo ID
        public function loadById($id){
            $sql = new Sql();
            $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuarios - :ID", array(
                ":ID"=>$id
            ));
            if (isset($result[0])){
                $row = $result[0];
                $this->setIdUsuario($row['idusuario']);
                $this->setDesLogin($row['deslogin']);
                $this->setDesSenha($row['dessenha']);
                $this->setDtCadastro(new DateTime($row['dtcadastro']));
            }
        }

        //Método para exibir os dados que foram tragos do Banco de Dados
        public function __toString(){
            return json_encode(array(
                "idusuario"=>$this->getIdUsuario(),
                "deslogin"=>$this->getDesLogin(),
                "dessenha"=>$this->getDesSenha(),
                "dtcadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
            ));
        }
    }

?>