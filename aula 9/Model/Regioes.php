<?php

    class Regioes{

        private $cidade;
        private $estado;
        private $pais;
        private $regioes;
       
        public function getCidade () {

            return $this->cidade;

        }

        //função para colocar valores em variaveis privadas
        public function setCidade($cidade) : self{

            $this->cidade =  $cidade;
            return $this;

        }
        //função para acessar variavel
        public function getEstado () {

           return $this->estado;

        }
         public function setEstado($estado) : self{

            $this->estado =  $estado;
            return $this;
         }
        //função para colocar valores em variaveis privadas
            public function getPais(){

            return $this->pais;

        }
         public function setPais($pais) : self{

            $this->pais =  $pais;
            return $this;
         }
        //função para acessar variavel
        public function getRegioes() {

            return $this->regioes;


        }
         public function setRegioes($regioes) : self{

            $this->regioes =  $regioes;
            return $this;
        }
    }   
        


?>