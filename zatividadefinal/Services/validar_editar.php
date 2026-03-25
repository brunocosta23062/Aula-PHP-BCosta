<?php

    //Requires
    require "../Model/Filmes.php";
    require "../Controller/Action_SQL.php";

    //Novo objeto
    $atualizar_livro = new Filmes;
    $nova_atualizacao = new Action_SQL;

    //Verificação de botão pressionado
    if(isset($_POST['editar']))

        //Recebimento de informações
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $ano = $_POST['ano'];
        $genero = $_POST['genero'];
        $classificacao = $_POST['classificacao'];
        $diretor = $_POST['diretor'];
        $locador = $_POST['locador'];
        $descricao = $_POST['descricao'];

        //Validação de campos preenchidos
        if(empty(trim($titulo))){

            echo "<script> alert('Campo titulo em branco'); window.location.href='../View/home.php'; </script>";
            exit;

        }
        if(empty(trim($ano))){

            echo "<script> alert('Campo ano em branco'); window.location.href='../View/home.php'; </script>";
            exit;
            
        }
        if(empty(trim($genero))){

            echo "<script> alert('Campo genero em branco'); window.location.href='../View/home.php'; </script>";
            exit;
            
        }
        
        if(empty(trim($classificacao))){

            echo "<script> alert('Campo classificação em branco'); window.location.href='../View/home.php'; </script>";
            exit;
            
        }
        
        if(empty(trim($diretor))){

            echo "<script> alert('Campo diretor em branco'); window.location.href='../View/home.php'; </script>";
            exit;
            
        }
        
        if(empty(trim($locador))){

            echo "<script> alert('Campo locador em branco'); window.location.href='../View/home.php'; </script>";
            exit;
            
        }
        if(empty(trim($descricao))){

            echo "<script> alert('Campo descrção em branco'); window.location.href='../View/home.php'; </script>";
            exit;
             

        //Entrega para local de armazenamento temporario
        $atualizar_livro->setTitulo($titulo);
        $atualizar_livro->setano($ano);
        $atualizar_livro->setgenero($genero);
        $atualizar_livro->setclassificacao($classificacao);
        $atualizar_livro->setdiretor($diretor);
        $atualizar_livro->setlocador($locador);
        $atualizar_livro->setdescricao($descricao);


        

    }else{

        echo "<script> alert('Por favor, clique no botão'); window.location.href='../View/home.php'; </script>";
        exit;

    }

    //Atualiza uma informação no banco se estiver okay

    if($atualizar_livro->getTitulo() != "" &&
       $atualizar_livro->getano() != "" &&
       $atualizar_livro->getgenero() != "" &&
       $atualizar_livro->getclassificacao() != "" &&
       $atualizar_livro->getdiretor() != "" &&
       $atualizar_livro->getlocador() != "" &&
       $atualizar_livro->getDescricao() != ""){

            $nova_atualizacao->editar(
                $id,
                $atualizar_livro->getTitulo(), 
                $atualizar_livro->getano(), 
                $atualizar_livro->getclassificacao(), 
                $atualizar_livro->getdiretor(),
                $atualizar_livro->getlocador(),
                $atualizar_livro->getDescricao());

       }
?>