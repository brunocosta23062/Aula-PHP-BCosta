<?php

    class Action_SQL{

        public function selecionar(){

            require "../Conexao/conexao.php";

            $stmt = $pdo->prepare("SELECT * FROM livros");
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE ){

                echo "<script> alert('Por favor, clique no botão!'); window.location.href='../../logar.php'; </script>";
                exit;

            }

            return $stmt;
        }

        public function selecionar_id(){}

        public function inserir($nome, 
            $descricao, 
            $genero, 
            $quantidade){

            require "../Conexao/conexao.php";

            $stmt = $pdo->prepare("INSERT INTO livros (nome, descricao, genero, quantidade) VALUES (:nome, :descricao, :genero, :quantidade)");
            
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":genero", $genero);
            $stmt->bindParam(":quantidade", $quantidade);
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE ){

                echo "<script> alert('Erro ao Inserir'); window.location.href='../View/cadastrar.php'; </script>";
                exit;

            }else{

                echo "<script> alert('Sucesso ao cadastrar de informações'); window.location.href='../View../cadastrar.php'; </script>";
                exit;

            }

            
        }

        public function editar(){}

        public function deletar(){}
        
    }

?>