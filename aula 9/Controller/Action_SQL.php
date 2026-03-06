<?php

    require "../Conexao/Conexao.php";
    

    class Action_SQL{

        //Função de selecionar tudo
        public function selecionar(){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM livros");
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){

                echo "<script> alert('Erro ao selecionar'); window.location.href='../../logar.php'; </script>";
                exit;

            }

            return $stmt;

        }  

        //Função de selecionar por id
        public function selecionar_id($id){

            

            if(isset($id) && trim($id) && $id != NULL){


                $nova_conexao = new Conexao;
                //Instrução de selecionar id
                $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM livros WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){

                    echo "<script> alert('Erro ao selecionar'); window.location.href='../View/home.php'; </script>";
                    exit;

                }

            }else{

                echo "<script> alert('Id não encontrado ou invalido'); window.location.href='../View/home.php'; </script>";
                exit;

            }

            return $stmt;

        }

        //Função de inserir
        public function inserir(
            $nome, 
            $descricao, 
            $genero, 
            $quantidade){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare("
            INSERT INTO 
            livros (nome, descricao, genero, quantidade) 
            VALUES (:nome, :descricao, :genero, :quantidade)");
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":genero", $genero);
            $stmt->bindParam(":quantidade", $quantidade);
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){

                echo "<script> alert('Erro ao inserir'); window.location.href='../View/cadastrar.php'; </script>";
                exit;

            }else{

                echo "<script> alert('Sucesso ao cadastrar informações'); window.location.href='../View/cadastrar.php'; </script>";
                exit;

            }

            

        }

        //Função de editar
        public function editar(
            $id,
            $nome,
            $descricao,
            $genero,
            $quantidade){

                

                if(isset($id) && trim($id) && $id != NULL){

                    $nova_conexao = new Conexao;

                    $stmt = $nova_conexao->conectar_banco()->prepare("
                    UPDATE livros SET 
                    nome = :nome, descricao = :descricao, 
                    genero = :genero, quantidade = :quantidade 
                    WHERE id = :id");
                    $stmt->bindParam(":nome", $nome);
                    $stmt->bindParam(":descricao", $descricao);
                    $stmt->bindParam(":genero", $genero);
                    $stmt->bindParam(":quantidade", $quantidade);
                    $stmt->bindParam(":id", $id);
                    $stmt->execute();

                    $resultado = $stmt;

                    if(!$resultado){

                        echo "<script> alert('Erro ao atualizar'); window.location.href='../View/editar.php'; </script>";
                        exit;

                    }else{

                        echo "<script> alert('Sucesso ao atualizar'); window.location.href='../View/home.php'; </script>";
                        exit;

                    }

                }else{

                    echo "<script> alert('Id não encontrado ou invalido'); window.location.href='../View/home.php'; </script>";
                    exit;

                }


        }

        //Função de deletar
        public function deletar($id){

            

            if(isset($id) && trim($id) && $id != NULL){

                $nova_conexao = new Conexao;

                //Instrução de selecionar id
                $stmt = $nova_conexao->conectar_banco()->prepare("DELETE FROM livros WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){

                    echo "<script> alert('Erro ao selecionar'); window.location.href='../View/home.php'; </script>";
                    exit;

                }else{

                    echo "<script> alert('Sucesso ao excluir'); window.location.href='../View/home.php'; </script>";
                    exit;

                }

            }else{

                    echo "<script> alert('Id não encontrado ou invalido'); window.location.href='../View/home.php'; </script>";
                    exit;

                }

        }

        
    }


?>