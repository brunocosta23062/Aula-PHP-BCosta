<?php

    //Requires
    require "../Model/Regioes.php";
    require "../Controller/Action_SQL_PEC.php";

    //Novo objeto
    $atualizar_regiao = new Regioes;
    $nova_atualizacao = new Action_SQL_PEC;

    //Verificação de botão pressionado
    if(isset($_POST['editar'])){

        //Recebimento de informações
        $id = $_POST['id'];
        $PEC_RECEBIDO = $_POST['PEC_ENVIADO'];
        $nome = $_POST['nome'];
      

        //Validação de campos preenchidos
        if(empty(trim($nome))){

            echo "<script> alert('Campo nome em branco'); window.location.href='../View/editar_PEC.php'; </script>";
            exit;

        }
        

        //Entrega para local de armazenamento temporario
        if($PEC_RECEBIDO == "cidade"){

             $atualizar_regiao->setCidade($nome);

        }else if($PEC_RECEBIDO == "estado"){

            $atualizar_regiao->setEstado($nome);

        }else if($PEC_RECEBIDO == "pais"){

             $atualizar_regiao->setPais($nome);

        }

    }else{

        echo "<script> alert('Por favor, clique no botão!'); window.location.href='../View/" . $PEC_RECEBIDO . ".php'; </script>";
        exit;

    }

    //Atualiza uma informação no banco se estiver okay

    if($atualizar_regiao->getCidade() !="" ||
        $atualizar_regiao->getEstado() != "" ||
        $atualizar_regiao->getPais() != ""){

            if($PEC_RECEBIDO == "cidade"){

                $nova_atualizacao->editar_PEC(
                $id,
                $PEC_RECEBIDO,
                $atualizar_regiao->getCidade()) ;

            }
            if($PEC_RECEBIDO == "estado"){
                $nova_atualizacao->editar_PEC(
                $id,
                $PEC_RECEBIDO,
                $atualizar_regiao->getEstado()) ;

            }
            if($PEC_RECEBIDO == "pais"){
                $nova_atualizacao->editar_PEC(
                $id,
                $PEC_RECEBIDO,
                $atualizar_regiao->getPais());

            }
           
        }
?>