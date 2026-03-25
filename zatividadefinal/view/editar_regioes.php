<?php

    require "../Controller/Action_SQL_PEC.php";

    //Recebe o id
    $id = $_GET['id'];

    //Seleciona as informações via id
    $nova_selecao = new Action_SQL_PEC;
    $requisicao_id_JOIN = $nova_selecao->selecionar_id_JOIN($id);
    $resultado_pais = $nova_selecao->selecionar_PEC("pais");
    $resultado_estado = $nova_selecao->selecionar_PEC("estado");
    $resultado_cidade = $nova_selecao->selecionar_PEC("cidade");

    //Traduz elas para serem mostradas
    $resultado_id = $requisicao_id_JOIN->fetch(PDO::FETCH_ASSOC);


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

    <title>Editar regiao</title>
  </head>
  <body>

    <div class="container">

    <form action="../Services/validar_editar_JOIN.php" method="post">

        <input type="hidden" name="id" value="<?=htmlspecialchars($id)?>">

        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center; margin-top: 3%;">Editar Região</h1>
            </div>
        </div>
        <div style="padding-left: 30%;">
        <div class="row">
            <div class="col-md-7">
                <label class="form-label">Pais</label>
                <select class="form-select" name="nome_pais">                
                    <?php while($opcoes_pais = $resultado_pais->fetch(PDO::FETCH_ASSOC)) :  ?>
                        <option value="<?= htmlspecialchars($opcoes_pais['id']) ?>" 
                        <?php 
                            if($opcoes_pais['id'] == $resultado_id['nome_pais']){
                                echo ' selected';
                            }
                        ?>>
                            <?= htmlspecialchars($opcoes_pais['nome']) ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <label class="form-label">Estado</label>
                <select class="form-select" name="nome_estado">
                    <?php while($opcoes_estado = $resultado_estado->fetch(PDO::FETCH_ASSOC)) :  ?>
                        <option value="<?= htmlspecialchars($opcoes_estado['id']) ?>" 
                        <?php 
                            if($opcoes_estado['id'] == $resultado_id['nome_estado']){
                                echo ' selected';
                            }
                        ?>>
                            <?= htmlspecialchars($opcoes_estado['nome']) ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <label class="form-label">Cidade</label>
                <select class="form-select" name="nome_cidade">
                    <?php while($opcoes_cidade = $resultado_cidade->fetch(PDO::FETCH_ASSOC)) :  ?>
                        <option value="<?= htmlspecialchars($opcoes_cidade['id']) ?>" 
                        <?php 
                            if($opcoes_cidade['id'] == $resultado_id['nome_cidade']){
                                echo ' selected';
                            }
                        ?>>
                            <?= htmlspecialchars($opcoes_cidade['nome']) ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-warning" style="width: 100%; margin-top: 3%;" name="editar">Editar</button>
            </div>
        </div>
                        =
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
