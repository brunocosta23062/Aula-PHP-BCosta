<?php

    require "../Conexao/Conexao.php";
    
    class Action_SQL_PEC{

        //Função de selecionar tudo
        public function selecionar_PEC($PEC){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM " . $PEC);
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){

                echo "<script> alert('Erro ao selecionar'); window.location.href='../../logar.php'; </script>";
                exit;

            }

            return $stmt;

        }  

        //Função de selecionar por id
        public function selecionar_id_PEC($PEC, $id){


            if(isset($id) && trim($id) && $id != NULL){

                $nova_conexao = new Conexao;
                //Instrução de selecionar id
                $stmt = $nova_conexao->conectar_banco()->prepare(
                "SELECT * FROM " . $PEC . " WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){

                    echo "<script> alert('Erro ao selecionar'); window.location.href='../View/" . $PEC . ".php'; </script>";
                    exit;

                }

            }else{

                echo "<script> alert('Id não encontrado ou invalido'); window.location.href='../View/" . $PEC . ".php'; </script>";
                exit;

            }

            return $stmt;

        }

        //Função de inserir
        public function inserir_PEC(
            $PEC,
            $PEC_VALOR){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare("
            INSERT INTO " . 
            $PEC . "(nome)
            VALUES (:nome)");
            $stmt->bindParam(":nome", $PEC_VALOR);
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){

                echo "<script> alert('Erro ao inserir'); window.location.href='../View/" . $PEC . ".php'; </script>";
                exit;

            }else{

                echo "<script> alert('Sucesso ao inserir'); window.location.href='../View/" . $PEC . ".php'; </script>";
                exit;

            }

            

        }

        //Função de editar
        public function editar_PEC(
            $id,
            $PEC,
            $nome){

                if(isset($id) && trim($id) && $id != NULL){

                    $nova_conexao = new Conexao;

                    $stmt = $nova_conexao->conectar_banco()->prepare("
                    UPDATE " . $PEC . " SET 
                    nome = :nome 
                    WHERE id = :id");
                    $stmt->bindParam(":nome", $nome);
                    $stmt->bindParam(":id", $id);
                    $stmt->execute();

                    $resultado = $stmt;

                    if(!$resultado){

                        echo "<script> alert('Erro ao atualizar'); window.location.href='../View/editar_PEC.php'; </script>";
                        exit;

                    }else{

                        echo "<script> alert('Sucesso ao atualizar'); window.location.href='../View/" . $PEC . ".php'; </script>";
                        exit;

                    }

                }else{

                    echo "<script> alert('Id não encontrado ou invalido'); window.location.href='../View/" . $PEC . ".php'; </script>";
                    exit;

                }


        }

        //Função de deletar
        public function deletar_PEC($PEC ,$id){

            if(isset($id) && trim($id) && $id != NULL){

                $nova_conexao = new Conexao;

                //Instrução de selecionar id
                $stmt = $nova_conexao->conectar_banco()->prepare("DELETE FROM  " . $PEC . "  WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){

                    echo "<script> alert('Erro ao selecionar'); window.location.href='../View/" . $PEC . ".php'; </script>";
                    exit;

                }else{

                    echo "<script> alert('Sucesso ao excluir'); window.location.href='../View/" . $PEC . ".php'; </script>";
                    exit;

                }

            }else{

                    echo "<script> alert('Id não encontrado ou invalido'); window.location.href='../View/" . $PEC . ".php'; </script>";
                    exit;

                }

        }

        
    }


?>