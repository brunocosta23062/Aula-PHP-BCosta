<?php

  session_start();
  //Verifica se o usuario esta logado e o manda de volta para o arquivo de login caso não esteja
  if($_SESSION['logado'] == FALSE){

    echo "<script> alert('Por favor, faça o login'); window.location.href='../index.php'; </script>";

  }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="estilo_projeto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exemplo_Projeto</title>
  </head>
<body >


    <div class="container">
<?php
        require "../includes/topo.php";
?>
        <form action="../Services/validacao.php" method="post">

            <div class="row">
                <div class="col-md-12">
                    <h1 id="texto1" style="text-align: center;margin-top: 2%;margin-bottom: 5%">Cadastrar filmes</h1>                
                </div>
            </div>     
            
            <div class="row"> 
                    <div class="col-md-3" style="margin-left: 17%;">
                        <label>Titulo</label>
                        <input type="text" class="form-control" placeholder="nome" name="nome" aria-placeholder="Titulo">
                        
                    </div>
                    <div class="col-md-2">
                        <label>Ano</label>
                        <input type="text" class="form-control" placeholder="ano" name="ano"  >
                    </div>
                    <div class="col-md-3">
                        <label>Genero</label>
                        <input type="text" class="form-control" placeholder="genero" name="genero"  >
                    </div>
            </div>
            <div class="row"  style="margin-left: 17%;">
                    <div class="col-md-3">
                        <label>Classificação</label>
                        <input type="text" class="form-control" placeholder="classificacao" name="clasifficacao" aria-placeholder="classificacao">
                    </div>
                    <div class="col-md-3">
                        <label>Diretor</label>
                        <input type="text" class="form-control" placeholder="diretor" name="diretor"  >
                    </div>
                    <div class="col-md-3">
                        <label>Locador</label>
                        <input type="text" class="form-control" placeholder="locador" name="locador">
                    </div>
            </div>
            <div class="row"  style="margin-left: 30%;">
                    <div class="col-md-6">
                        <label>Descrição</label>
                        <input type="text" class="form-control" placeholder="Descricão do livro" name="descricao"  >
                    </div>
            </div> 
           
        <div class="row" style="text-align: center;margin-top: 2%;">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="width: 100%;text-align: center;margin-bottom: 3%;" name="enviar">enviar</button>
                </div>
        </div>
       </form>  
        <div>
        <?php

                require "../includes/rodape.php";

            ?>
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

