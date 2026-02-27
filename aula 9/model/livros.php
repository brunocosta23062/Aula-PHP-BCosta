<?php

    class livros{

        private $nome;
        private $descricao;
        private $genero;
        private $quantidade;
       
        public function getNome () {

            return $this->nome;

        }

        //função para colocar valores em variaveis privadas
        public function setNome($nome) : self{

            $this->nome =  $nome;
            return $this;

        }
        //função para acessar variavel
        public function getDescricao () {

           return $this->descricao;

        }
         public function setDescricao($descricao) : self{

            $this->descricao =  $descricao;
            return $this;
         }
        //função para colocar valores em variaveis privadas
            public function getGenero(){

            return $this->genero;

        }
         public function setGenero($genero) : self{

            $this->genero =  $genero;
            return $this;
         }
        //função para acessar variavel
        public function getQuantidade() {

            return $this->quantidade;


        }
         public function setQuantidade($quantidade) : self{

            $this->quantidade =  $quantidade;
            return $this;
        }
    }   
        


?>