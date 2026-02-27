<?php

    require "../Conexao/conexao.php";
    require "../Controle/Action_SQL.php";

    $nova_selecao = new Action_SQL;
    $resultado = $nova_selecao->selecionar()
    
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

    <title>Aula 8</title>
  </head>
    <body>
    <div class="container"> 
    <?php require "../includes/topo.php"; ?>
    <h1 style="margin-bottom: 3%; margin-top: 3%;text-align: center;">Livros Cadastrados</h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Genero</th>
            <th scope="col">quantidade</th>
            <th scope="col">acoes</th>
            </tr>
        </thead>
        <tbody>

            <?php while($row = $resultado->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                <th><?= $row['id'];  ?></th>
                <td><?= $row['nome'];  ?> </td>
                <td><?= $row['descricao'];  ?> </td>
                <td><?= $row['genero'];  ?> </td>
                <td><?= $row['quantidade'];  ?> </td>
                <td><a class="btn btn-primary" href="editar.php?id=<?= $row['id']; ?>">Editar</a>
                 <a class="btn btn-danger" href="deletar.php?id=<?= $row['id']; ?>"onclick="return confirm('Voce tem certeza que quer deletar?')">Deletar</a></td>
                <td>
                </tr>
 
                <?php endwhile; ?>

            </tbody>
        </table>

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