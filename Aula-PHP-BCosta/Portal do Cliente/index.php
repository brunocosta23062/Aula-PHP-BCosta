
<?php

    session_start();
    if(isset($_POST['logar'])){

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if(empty(trim($usuario))){

            echo "<script> alert('Campo Usuario em branco'); window.location.href='index.php'; </script>";

        }
        if(empty(trim($senha))){

            echo "<script> alert('Campo Senha em branco'); window.location.href='index.php'; </script>";

        }

        //logar o ususario
         if($usuario == "Flexxo" && $senha == "123"){

            //iniciou a cessao de logado e enviou para a tela de login
            $_SESSION['logado'] = TRUE;
            header("location: projeto/home.php");


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
    <link rel="stylesheet" href="projeto/estilo_projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aula 6</title>
  </head>
  <body id="caixalogin">

    <div class="container">

    <form method="post" autocomplete="off">

            <div id="espacamento" class="row">
                <div class="col-md-12">
                    <h1>Logar</h1>
                </div>
            </div>
            <div id="espacamento" class="row">
                <div class="col-md-12">
                    <label>Usuario</label>
                    <input type="text" class="form-control" name="usuario">
                </div>
                
            </div>
            <div id="espacamento" class="row">
                <div class="col-md-12">
                    <label>senha</label>
                    <input type="password" class="form-control" name="senha">
                </div>
            </div>
            
            
            <div id="espacamento" class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary" name="logar">Logar</button>
                </div>
            </div>

    </form>

    </div>
        
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