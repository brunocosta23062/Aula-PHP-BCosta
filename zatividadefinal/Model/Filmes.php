<?php

    class Filmes{

        private $nome;
        private $descricao;
        private $alugado;
        private $locador;
       
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
            public function getalugado(){

            return $this->alugado;

        }
         public function setalugado($alugado) : self{

            $this->alugado =  $alugado;
            return $this;
         }
        //função para acessar variavel
        public function getlocador() {

            return $this->locador;


        }
         public function setlocador($locador) : self{

            $this->locador =  $locador;
            return $this;
        }
    }   
        


?>