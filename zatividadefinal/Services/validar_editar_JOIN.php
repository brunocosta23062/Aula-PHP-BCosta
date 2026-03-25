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
        $nome_pais = $_POST['nome_pais'];
        $nome_estado = $_POST['nome_estado'];
        $nome_cidade = $_POST['nome_cidade'];

        //Validação de campos preenchidos
        if(empty(trim($nome_pais))){

            echo "<script> alert('Campo nome do pais em branco'); window.location.href='../View/editar_regioes.php'; </script>";
            exit;

        }
        if(empty(trim($nome_estado))){

            echo "<script> alert('Campo nome do estado em branco'); window.location.href='../View/editar_regioes.php'; </script>";
            exit;
            
        }
        if(empty(trim($nome_cidade))){

            echo "<script> alert('Campo nome da cidade em branco'); window.location.href='../View/editar_regioes.php'; </script>";
            exit;
            
        }

        //Entrega para local de armazenamento temporario
        $atualizar_regiao->setPais($nome_pais);
        $atualizar_regiao->setEstado($nome_estado);
        $atualizar_regiao->setCidade($nome_cidade);

        

    }else{

        echo "<script> alert('Por favor, clique no botão'); window.location.href='../View/regioes.php'; </script>";
        exit;

    }

    //Atualiza uma informação no banco se estiver okay

    if($atualizar_regiao->getPais() != "" &&
       $atualizar_regiao->getEstado() != "" &&
       $atualizar_regiao->getCidade() != ""){

            $nova_atualizacao->editar_JOIN(
                $id,
                $atualizar_regiao->getPais(), 
                $atualizar_regiao->getEstado(), 
                $atualizar_regiao->getCidade());

       }
?>