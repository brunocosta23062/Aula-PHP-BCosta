<?php


    class Predios{

        //delcara as variaveis em formato privado
        private $nome;
        private $altura;
        private $largura;
        private $numero;
        private $quantidade;

        //função para acessar variavel
        public function getNome () {

            return $this->nome;

        }

        //função para colocar valores em variaveis privadas
        public function setNome($nome) : self{

            $this->nome =  $nome;
            return $this;




        }
        //função para acessar variavel
        public function getaltura () {

           return $this->altura;

        }

        //função para colocar valores em variaveis privadas
        public function setAltura($altura) : self{

            $this->altura =  $altura;
            return $this;




        }
        //função para acessar variavel
        public function getLargura () {

            return $this->largura;

        }

        //função para colocar valores em variaveis privadas
        public function setlargura($largura) : self{

            $this->largura =  $largura;
            return $this;




        }
        //função para acessar variavel
        public function getNumero () {

            return $this->numero;

        }

        //função para colocar valores em variaveis privadas
        public function setNumero($numero) : self{

            $this->numero =  $numero;
            return $this;




        }
        //função para acessar variavel
        public function getQuantidade () {

            return $this->quantidade;

        }

        //função para colocar valores em variaveis privadas
        public function setQuantidade($quantidade) : self{

            $this->quantidade =  $quantidade;
            return $this;




        }




    }

?>