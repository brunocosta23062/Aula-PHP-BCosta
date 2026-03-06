


<?php

    require "Conexao/Conexao.php";

    session_start();
    if(isset($_POST['logar'])){

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        //Validação de campos em branco(empty) e espaços(trim)
        if(empty(trim($usuario))){

            echo "<script> alert('Campo Usuário em branco'); window.location.href='index.php'; </script>";
            exit();
        }
        if(empty(trim($senha))){

            echo "<script> alert('Campo Senha em branco'); window.location.href='index.php'; </script>";
            exit();
        }
        $nova_conexão = new Conexao;
        $stmt = $nova_conexão->conectar_banco()->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
        $stmt->bindParam(":usuario", $usuario);
        $stmt->execute();

        $resultado = $stmt;

    
        if(!$resultado){


            echo "<script> alert('Impossivel selecionar'); window.location.href='index.php'; </script>";
            

        }

    
        $comparar = $stmt->fetch(PDO::FETCH_ASSOC);

        //Logar o usuario
        if($usuario == $comparar['usuario'] && $senha == $comparar['senha']){

            //Inicio a sessão de logado e enviou para a tela de login
            $_SESSION['logado'] = TRUE;
            header("Location:View/home.php");

        }else{

            echo "<script> alert('Usuario ou senha incorretos'); window.location.href='index.php'; </script>";

        }

        

    }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="exemplo_projeto/estilo_projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aula 6</title>
  </head>
  <body>

    <div class="container">

    <form method="post" autocomplete="off">

            <div id="espacamento" class="row">
                <div class="col-md-12">
                    <h1 style="text-align: center;">Logar</h1>
                </div>
            </div>
            <div style="margin-top: 3%;" class="row">
                <div class="col-md-12">
                    <label>Usuário</label>
                    <input type="text" class="form-control" name="usuario">
                </div>
            </div>
            <div style="margin-top: 3%;" class="row">
                <div class="col-md-12">
                    <label>Senha</label>
                    <input type="text" class="form-control" name="senha">
                </div>
            </div>
            <div style="margin-top: 3%;" class="row">
                <div class="col-md-12">
                    <button style="width: 100%;" class="btn btn-primary" name="logar">Logar</button>
                </div>
            </div>

    </form>

    </div>


    














    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>