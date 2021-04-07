<?php
    class Cursos{
        private $curso;
        private $preco;
        

        public function setCurso($curso){
            $this->curso =  $curso;
        }

        public function setPreco($preco){
            $this->preco =  $preco;
        }


        public function getCurso(){
            return $this->curso;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function adicionar(){
            $sql = "INSERT INTO curso(curso, preco) VALUES (:curso, :preco)";

            $stmt = DB::conexao()->prepare($sql);
            $stmt->bindParam(':curso', $this->curso);
            $stmt->bindParam(':preco', $this->preco);
            $stmt->execute();
        }

    }
?>