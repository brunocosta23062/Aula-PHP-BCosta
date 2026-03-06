


<?php

  session_start();
  //Verifica se o usuario esta logado e o manda de volta para o arquivo de login caso não esteja
  if($_SESSION['logado'] == FALSE){

    echo "<script> alert('Por favor, faça o login'); window.location.href='../index.php'; </script>";

  }

?>
<?php

    
    require "../Controller/Action_SQL.php";

    //Instrução selecionar
    $nova_selecao = new Action_SQL;
    $resultado = $nova_selecao->selecionar();    


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

    <?php
        require "../Includes/topo.php";
    ?>

    <h1 style="margin-bottom: 3%; margin-top: 3%; text-align: center;"> Livros cadastrados</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Genero</th>
                <th scope="col">Quantidade de folhas</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        <!-- Pega os valores recebidos do SELECT feito e entrega a variavel row --->
            <?php while($row = $resultado->fetch(PDO::FETCH_ASSOC)) :  ?>

            <tr>
                <td> <?= $row['id']; ?> </td>
                <td> <?= $row['nome']; ?> </td>
                <td> <?= $row['descricao']; ?> </td>
                <td> <?= $row['genero']; ?> </td>
                <td> <?= $row['quantidade']; ?> </td>
                <td> 
                    <a class="btn btn-primary" href="editar.php?id= <?= $row['id']; ?>" >Editar</a> 
                    <a class="btn btn-danger" href="../Services/deletar.php?id=<?= $row['id']; ?>" onclick="return confirm('Você tem certeza que quer deletar?')">Deletar</a> 
                </td>
            </tr>

            <?php endwhile; ?>
        </tbody>
    </table>


        <?php

            require "../includes/rodape.php";

        ?>

    </div>

  </body>
</html>