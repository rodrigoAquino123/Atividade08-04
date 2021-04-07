<?php
    class Professor{
        private $nome;
        private $idade;
        private $email;

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }

        public function getEmail(){
            return $this->email;
        }

    }

?>