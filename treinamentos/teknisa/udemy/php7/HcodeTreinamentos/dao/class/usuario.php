<?php

    class Usuario {
        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;

        // ID Usuário
            // GETTER
        public function getIdusuario(){
            return $this->idusuario;
        }

            //SETTER
        public function setIdusuario($valor){
            $this->idusuario = $valor;
        }

        // LOGIN
            // GETTER
        public function getDeslogin(){
            return $this->deslogin;
        }

            // SETTER
        public function setDeslogin($valor){
            $this->deslogin = $valor;
        }

        // SENHA
            // GETTER
        public function getDessenha(){
            return $this->dessenha;
        }

            // SETTER
        public function setDessenha($valor){
            $this->dessenha = $valor;
        }

        // DATA CADASTRO
            // GETTER
        public function getDtcadastro(){
            return $this->dtcadastro;
        }

            // SETTTER
        public function setDtcadastro($valor){
            $this->dtcadastro = $valor;
        }

        public function loadById($id){
            $sql = new Sql();
            $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
                ":ID" => $id
            ));
            if (count($result) > 0){
               
                $this->setData($result[0]);

            }
        }

        public function __toString(){
            return json_encode(array(
                "idusuario"=>$this->getIdusuario(),
                "deslogin"=>$this->getDeslogin(),
                "dessenha"=>$this->getDessenha(),
                "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
            ));
        }

        public static function getList(){
            $sql = new Sql();
            return $sql->select('SELECT * FROM tb_usuarios ORDER BY deslogin');
        }

        public static function search($login){
            $sql = new Sql();
            return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
                ':SEARCH'=>'%'.$login.'%'
            ));
        }

        public function login($login, $password) {
            $sql = new Sql();
            $result = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
                ":LOGIN"=>$login,
                ":PASSWORD"=>$password
            ));

            if(count($result) > 0) {

                $this->setData($result[0]);
                
            } else {
                throw new Exception("Login e/ou senha inválidos");
            }
        }

        public function setData($data){
            $this->setIdusuario($data['idusuario']);
                $this->setDeslogin($data['deslogin']);
                $this->setDessenha($data['dessenha']);
                $this->setDtcadastro(new DateTime($data['dtcadastro']));
        }

        public function insert(){
            $sql = new Sql();
            $result = $sql->select("EXEC sp_usuario_insert :LOGIN, :PASSWORD;", array(
                ':LOGIN'=>$this->getDeslogin(),
                ':PASSWORD'=>$this->getDessenha()
              ));
            var_dump($result);
            if (count($result) > 0) {
                $this->setData($result[0]);
            }
        }

    }


?>