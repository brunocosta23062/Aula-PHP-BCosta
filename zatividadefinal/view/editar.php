

<?php

  session_start();
  //Verifica se o usuario esta logado e o manda de volta para o arquivo de login caso não esteja
  if($_SESSION['logado'] == FALSE){

    echo "<script> alert('Por favor, faça o login'); window.location.href='../index.php'; </script>";

  }

?>
<?php

    require "../Controller/Action_SQL.php";

    //Recebe o id
    $id = $_GET['id'];

    //Seleciona as informações via id
    $nova_selecao = new Action_SQL;
    $requisicao = $nova_selecao->selecionar_id($id);
    $resultado = $requisicao->fetch(PDO::FETCH_ASSOC);


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

    <title>Aula 15</title>
  </head>
  <body>

    <div class="container">

    <form action="../Services/validar_editar.php" method="post">

        <input type="hidden" name="id" value="<?=htmlspecialchars($id)?>">

        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center; margin-top: 3%;">Editar Filmes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Nome do livro</label>
                <input type="text" class="form-control" name="nome" value="<?= htmlspecialchars($resultado['nome']) ?>">
            </div>
            <div class="col-md-6">
                <label>Descrição do livro</label>
                <input type="text" class="form-control" name="descricao" value="<?= htmlspecialchars($resultado['descricao']) ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>alugado </label>
                <input type="text" class="form-control" name="alugado" value="<?= htmlspecialchars($resultado['alugado']) ?>">
            </div>
            <div class="col-md-6">
                <label>locador </label>
                <input type="text" class="form-control" name="locador" value="<?= htmlspecialchars($resultado['locador']) ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-warning" style="width: 100%; margin-top: 3%;" name="editar">Editar</button>
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


