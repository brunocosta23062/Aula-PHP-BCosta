<?php

    require "../Controller/Action_SQL_PEC.php";

    //Instrução selecionar
    $nova_selecao = new Action_SQL_PEC;
    $resultado = $nova_selecao->selecionar_PEC("pais");


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

    <title>Paises</title>
  </head>
  <body>

    <div class="container">

    <?php
        require "../Includes/topo.php";
    ?>

    <h1 style="margin-bottom: 3%; margin-top: 3%; text-align: center;"> Paises cadastradas</h1>

    <form action="../Services/validar_cadastro_PEC.php" method="post">
        <input type="hidden" name="PEC_ENVIADO" value="pais">
        <div class="row" style="margin-bottom: 3%;">
            <div class="col-md-3">
                <div class="input-group">
                    <span class="input-group-text" style="background-color: cadetblue; color: white;">Pais: </span>
                    <input type="text" class="form-control" name="nome" placeholder="Informe a pais aqui">
                </div>
            </div>
            <div class="col-md-2">
                <button type="submit" name="enviar" class="btn btn-primary">Cadastrar pais</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
                
            </tr>
        </thead>
        <tbody>
        <!-- Pega os valores recebidos do SELECT feito e entrega a variavel row --->
            <?php while($row = $resultado->fetch(PDO::FETCH_ASSOC)) :  ?>

            <tr>
                <td> <?= $row['id']; ?> </td>
                <td> <?= $row['nome']; ?> </td>
                <td> 
                    <a class="btn btn-primary" href="editar.php?id= <?= $row['id']; ?>&PEC_ENVIADO=estado"" >Editar</a> 
                    <a class="btn btn-danger" href="../Services/deletar_PEC.php?id=<?= $row['id']; ?>&PEC_ENVIADO=estado" onclick="return confirm('Você tem certeza que quer deletar?')">Deletar</a> 
                </td>
            </tr>

            <?php endwhile; ?>
        </tbody>
    </table>

    <?php

        require "../Includes/rodape.php";

    ?>

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