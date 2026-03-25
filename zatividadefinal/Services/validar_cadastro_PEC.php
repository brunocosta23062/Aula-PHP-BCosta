<?php

    require "../Model/Regioes.php";
    require "../Controller/Action_SQL_PEC.php";

    $nova_regiao = new Regioes;
    $nova_insercao = new Action_SQL_PEC;

    if(isset($_POST['enviar'])){


        $PEC_RECEBIDO = $_POST['PEC_ENVIADO'];
        $nome = $_POST['nome'];
      
        if(empty(trim($nome))){

            echo "<script> alert('Campo Nome em branco'); window.location.href='../View/cadastrar.php'; </script>";

        }
        if($PEC_RECEBIDO == "cidade"){

             $nova_regiao->setCidade($nome);

        }else if($PEC_RECEBIDO == "estado"){

            $nova_regiao->setEstado($nome);

        }else if($PEC_RECEBIDO == "pais"){

             $nova_regiao->setPais($nome);

        }
        
           

        
       

    }else{

        echo "<script> alert('Por favor, clique no botão!'); window.location.href='../View/home.php.php'; </script>";
        exit;
    }


    
    
    

    if($nova_regiao->getCidade() !="" ||
        $nova_regiao->getEstado() != "" ||
        $nova_regiao->getPais() != ""){

            if($PEC_RECEBIDO == "cidade"){

                $nova_insercao->inserir_PEC(
                $PEC_RECEBIDO,
                $nova_regiao->getCidade()) ;

            }
            if($PEC_RECEBIDO == "estado"){

                $nova_insercao->inserir_PEC(
                $PEC_RECEBIDO,
                $nova_regiao->getEstado()) ;

            }
            if($PEC_RECEBIDO == "pais"){

                $nova_insercao->inserir_PEC(
                $PEC_RECEBIDO,
                $nova_regiao->getPais());

            }
           
        }
   

?>