<?php

    require"conexao.php";

    if($_GET['id']){

        $id = $_GET ['id'];

        if(isset($_POST['editar'])){

            $nome = $_POST['nome'];
            $tipo = $_POST['tipo'];
            $comprimento = $_POST['comprimento'];
            $largura = $_POST['largura'];
            $material = $_POST['material'];

            if(empty(trim($nome))){
            echo"<script> alert('Campo Nome em branco'); window.location.href='editar.php'; </script";
            }
             if(empty(trim($tipo))){

            echo"<script> alert('Campo Tipo em branco'); window.location.href='editar.php'; </script";
            }
             if(empty(trim($comprimento))){

            echo"<script> alert('Campo Comprimento em branco'); window.location.href='editar.php'; </script";
            }
             if(empty(trim($largura))){

            echo"<script> alert('Campo Largura em branco'); window.location.href='editar.php'; </script";
            }
            
            if(empty(trim($material))){

            echo"<script> alert('Campo material em branco'); window.location.href='editar.php'; </script>";
            }

            $stmt = $pdo->prepare("UPDATE aula8 SET nome= :nome, tipo= :tipo, comprimento= :comprimento, largura= :largura,  material = :material WHERE id = :id ");
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":tipo", $tipo);
            $stmt->bindParam(":compriemnto", $comprimento);
            $stmt->bindParam(":largura", $largura);
            $stmt->bindParam(":material", $material);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            echo"<script> alert('Informações alteradas com sucesso'); window.location.href='home.php'; </script>";
        
        }/*else{

         echo"<script> alert('Por favor, clique no botão'); window.location.href='editar.php'; </script>";

        }*/
        
    }else{

         echo"<script> alert('Incorreto, reafazer'); window.location.href='home.php'; </script>";
         
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

        <form method="post">

            <div class="row">
                <div class="col-md-12">
                    <h1 id="texto1" style="text-align: center;margin-top: 2%;margin-bottom: 5%"> Alterar Pedido</h1>                
                </div>
            </div>     
            
            <div class="row"> 
                    <div class="col-md-6">
                        <label>Nome</label>
                        <input type="text" class="form-control" placeholder="nome" name="nome">
                    </div>
                    
                    <div class="col-md-6">
                        <label>Tipo</label>
                        <input type="text" class="form-control" placeholder="tipo" name="tipo">
                    </div>

                    <div class="col-md-6">
                        <label>Comprimento</label>
                        <input type="text" class="form-control" placeholder="Comprimento" name="comprimento">
                    </div>

                    <div class="col-md-6">
                        <label>Largura</label>
                        <input type="text" class="form-control" placeholder="Largura" name="largura">
                    </div>

                    <div class="col-md-6">
                        <label>material</label>
                        <input type="text" class="form-control" placeholder="material" name="material">
                    </div>
            </div> 
           
        <div class="row" style="text-align: center;margin-top: 2%;">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="width: 100%;text-align: center;" name="editar">Editar</button>
                </div>
        </div>
       </form>
    </div>










 
</body>
</html>