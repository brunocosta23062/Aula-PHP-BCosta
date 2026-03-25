<?php

    require "../Conexao/Conexao.php";
    
    class Action_SQL_PEC{

        //Função de selecionar tudo
        public function selecionar_JOIN(){

            $nova_conexao = new Conexao;

            //Pais = p
            //Estado = e
            //Cidade = c
            //Regiao = r

            $stmt = $nova_conexao->conectar_banco()->prepare("
            SELECT 
            r.id,  
            p.nome AS nome_pais,
            e.nome AS nome_estado,
            c.nome AS nome_cidade
            FROM regioes r

            JOIN pais p on p.id = r.nome_pais
            JOIN estado e on e.id = r.nome_estado
            JOIN cidade c on c.id = r.nome_cidade
            ");
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){

                echo "<script> alert('Erro ao selecionar'); window.location.href='../../logar.php'; </script>";
                exit;

            }

            return $stmt;

        }  

        //Função de selecionar por id
        public function selecionar_id_JOIN($id){


            if(isset($id) && trim($id) && $id != NULL){

                $nova_conexao = new Conexao;
                //Instrução de selecionar id
                $stmt = $nova_conexao->conectar_banco()->prepare("
                SELECT * FROM regioes WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){

                    echo "<script> alert('Erro ao selecionar'); window.location.href='../View/regioes.php'; </script>";
                    exit;

                }

            }else{

                echo "<script> alert('Id não encontrado ou invalido'); window.location.href='../View/home.php'; </script>";
                exit;

            }

            return $stmt;

        }

        //Função de inserir
        public function inserir_JOIN(
            $nome_pais, 
            $nome_estado, 
            $nome_cidade){

            $nova_conexao = new Conexao;

            $stmt = $nova_conexao->conectar_banco()->prepare("
            INSERT INTO regioes (nome_pais, nome_estado, nome_cidade) 
            VALUES (:nome_pais, :nome_estado, :nome_cidade)");
            $stmt->bindParam(":nome_pais", $nome_pais);
            $stmt->bindParam(":nome_estado", $nome_estado);
            $stmt->bindParam(":nome_cidade", $nome_cidade);
            $stmt->execute();

            $resultado = $stmt;

            if($resultado != TRUE){

                echo "<script> alert('Erro ao inserir'); window.location.href='../View/regioes.php'; </script>";
                exit;

            }else{

                echo "<script> alert('Sucesso ao inserir'); window.location.href='../View/regioes.php'; </script>";
                exit;

            }

            

        }

        //Função de editar
        public function editar_JOIN(
            $id,
            $nome_pais,
            $nome_estado,
            $nome_cidade){

                if(isset($id) && trim($id) && $id != NULL){

                    $nova_conexao = new Conexao;

                    $stmt = $nova_conexao->conectar_banco()->prepare("
                    UPDATE regioes SET 
                    nome_pais = :nome_pais,
                    nome_estado = :nome_estado,
                    nome_cidade = :nome_cidade
                    WHERE id = :id");
                    $stmt->bindParam(":nome_pais", $nome_pais);
                    $stmt->bindParam(":nome_estado", $nome_estado);
                    $stmt->bindParam(":nome_cidade", $nome_cidade);
                    $stmt->bindParam(":id", $id);
                    $stmt->execute();

                    $resultado = $stmt;

                    if(!$resultado){

                        echo "<script> alert('Erro ao atualizar'); window.location.href='../View/editar_regioes.php'; </script>";
                        exit;

                    }else{

                        echo "<script> alert('Sucesso ao atualizar'); window.location.href='../View/regioes.php'; </script>";
                        exit;

                    }

                }else{

                    echo "<script> alert('Id não encontrado ou invalido'); window.location.href='../View/regioes.php'; </script>";
                    exit;

                }


        }

        //Função de deletar
        public function deletar_JOIN($id){

            if(isset($id) && trim($id) && $id != NULL){

                $nova_conexao = new Conexao;

                //Instrução de selecionar id
                $stmt = $nova_conexao->conectar_banco()->prepare("
                DELETE FROM regioes WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){

                    echo "<script> alert('Erro ao selecionar'); window.location.href='../View/regioes.php'; </script>";
                    exit;

                }else{

                    echo "<script> alert('Sucesso ao excluir'); window.location.href='../View/regioes.php'; </script>";
                    exit;

                }

            }else{

                    echo "<script> alert('Id não encontrado ou invalido'); window.location.href='../View/regioes.php'; </script>";
                    exit;

                }

        }


        //////////////////////////////////////////////////////////////////////////////////


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
                $stmt = $nova_conexao->conectar_banco()->prepare("
                SELECT * FROM " . $PEC . " WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();

                $resultado = $stmt;

                if($resultado != TRUE){

                    echo "<script> alert('Erro ao selecionar'); window.location.href='../View/" . $PEC . ".php'; </script>";
                    exit;

                }

            }else{

                echo "<script> alert('Id não encontrado ou invalido'); window.location.href='../View/home.php'; </script>";
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
            $PEC . " (nome) 
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
                    UPDATE " . $PEC ." SET 
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
                $stmt = $nova_conexao->conectar_banco()->prepare("
                DELETE FROM " . $PEC . " WHERE id = :id");
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