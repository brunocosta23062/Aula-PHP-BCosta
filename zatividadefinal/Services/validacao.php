<?php

    require "../Model/Filmes.php";
    require "../Controller/Action_SQL.php";

    $novo_livros = new Filmes;
    $nova_insercao = new Action_SQL;

    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $alugado = $_POST['alugado'];
        $locador = $_POST['locador'];
       

       


        if(empty(trim($nome))){

            echo "<script> alert('Campo Nome em branco'); window.location.href='../View/cadastrar.php.php'; </script>";

        }
        if(empty(trim($descricao))){

            echo "<script> alert('Campo Descrição em branco'); window.location.href='../View/cadastrar.php.php'; </script>";

        }
        if(empty(trim($alugado))){

            echo "<script> alert('Campo alugado em branco'); window.location.href='../View/cadastrar.php.php'; </script>";

        }
        if(empty(trim($locador))){

            echo "<script> alert('Campo locador em branco'); window.location.href='../View/cadastrar.php.php'; </script>";

        }
        

        $novo_livros->setNome($nome);
        $novo_livros->setDescricao($descricao);
        $novo_livros->setalugado($alugado);
        $novo_livros->setlocador($locador);
        

    }else{

        echo "<script> alert('Por favor, clique no botão!'); window.location.href='../View/cada.php.php'; </script>";
        exit;
    }


    
    
    

    if($novo_livros->getNome() !="" &&
        $novo_livros->getDescricao() != "" &&
        $novo_livros->getalugado() != "" &&
        $novo_livros->getlocador() !=""){
       

            $nova_insercao->inserir(
                $novo_livros->getNome(), 
                $novo_livros->getDescricao(), 
                $novo_livros->getalugado(),
                $novo_livros->getlocador());

       }
   

?>