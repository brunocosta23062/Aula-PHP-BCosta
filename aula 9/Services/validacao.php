<?php

    require "../Model/livros.php";
    require "../controle/Action_SQL.php";

    $novo_livros = new Livros;
    $nova_insercao = new Action_SQL;

    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $genero = $_POST['genero'];
        $quantidade = $_POST['quantidade'];

       


        if(empty(trim($nome))){

            echo "<script> alert('Campo Nome em branco'); window.location.href='../View/cadastrar.php.php'; </script>";

        }
        if(empty(trim($descricao))){

            echo "<script> alert('Campo Descrição em branco'); window.location.href='../View/cadastrar.php.php'; </script>";

        }
        if(empty(trim($genero))){

            echo "<script> alert('Campo Genero em branco'); window.location.href='../View/cadastrar.php.php'; </script>";

        }
        if(empty(trim($quantidade))){

            echo "<script> alert('Campo Quantidade em branco'); window.location.href='../View/cadastrar.php.php'; </script>";

        }

        $novo_livros->setNome($nome);
        $novo_livros->setDescricao($descricao);
        $novo_livros->setGenero($genero);
        $novo_livros->setQuantidade($quantidade);

    }else{

        echo "<script> alert('Por favor, clique no botão!'); window.location.href='../View/home.php.php'; </script>";
        exit;
    }


    
    
    

    if($novo_livros->getNome() !="" &&
        $novo_livros->getDescricao() != "" &&
        $novo_livros->getGenero() !="" &&
        $novo_livros->getQuantidade() != ""){

            $nova_insercao->inserir(
                $novo_livros->getNome(),
                $novo_livros->getDescricao(),
                $novo_livros->getGenero(),
                $novo_livros->getQuantidade());

        }
   

?>