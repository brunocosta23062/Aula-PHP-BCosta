<?php

    //Requires
    require "../Model/Livros.php";
    require "../Controller/Action_SQL.php";

    //Novo objeto
    $atualizar_livro = new Livros;
    $nova_atualizacao = new Action_SQL;

    //Verificação de botão pressionado
    if(isset($_POST['editar'])){

        //Recebimento de informações
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $genero = $_POST['genero'];
        $quantidade = $_POST['quantidade'];

        //Validação de campos preenchidos
        if(empty(trim($nome))){

            echo "<script> alert('Campo nome em branco'); window.location.href='../View/cadastrar.php'; </script>";
            exit;

        }
        if(empty(trim($descricao))){

            echo "<script> alert('Campo descrição em branco'); window.location.href='../View/cadastrar.php'; </script>";
            exit;
            
        }
        if(empty(trim($genero))){

            echo "<script> alert('Campo genero em branco'); window.location.href='../View/cadastrar.php'; </script>";
            exit;
            
        }
        if(empty(trim($quantidade))){

            echo "<script> alert('Campo quantidade de folhas em branco'); window.location.href='../View/cadastrar.php'; </script>";
            exit;
            
        }

        //Entrega para local de armazenamento temporario
        $atualizar_livro->setNome($nome);
        $atualizar_livro->setDescricao($descricao);
        $atualizar_livro->setGenero($genero);
        $atualizar_livro->setQuantidade($quantidade);

        

    }else{

        echo "<script> alert('Por favor, clique no botão'); window.location.href='../View/home.php'; </script>";
        exit;

    }

    //Atualiza uma informação no banco se estiver okay

    if($atualizar_livro->getNome() != "" &&
       $atualizar_livro->getDescricao() != "" &&
       $atualizar_livro->getGenero() != "" &&
       $atualizar_livro->getQuantidade() != ""){

            $nova_atualizacao->editar(
                $id,
                $atualizar_livro->getNome(), 
                $atualizar_livro->getDescricao(), 
                $atualizar_livro->getGenero(), 
                $atualizar_livro->getQuantidade());

       }
?>