<?php

    require "conexao.php";

    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $comprimento = $_POST['comprimento'];
        $largura = $_POST['largura'];
        $material = $_POST['material'];

       

        //Validação de campos em branco
        if(empty($nome)){

            echo "<script> alert('Campo Nome em branco'); window.location.href='inserir.php'; </script>";

        }
        if(empty($tipo)){

            echo "<script> alert('Campo Tipo em branco'); window.location.href='inserir.php'; </script>";

        }
         if(empty($comprimento)){

            echo "<script> alert('Campo Comprimento em branco'); window.location.href='inserir.php'; </script>";

        }
         if(empty($largura)){

            echo "<script> alert('Campo Largura em branco'); window.location.href='inserir.php'; </script>";

        }
         if(empty($material)){

            echo "<script> alert('Campo Material  em branco'); window.location.href='inserir.php'; </script>";

        }


        $stmt = $pdo->prepare("INSERT INTO aula8 (nome, tipo, comprimento, largura, material) VALUES (:nome, :tipo, :comprimento, :largura, :material)");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":largura", $largura);
        $stmt->bindParam(":comprimento", $comprimento);
        $stmt->bindParam(":material", $material);
        $stmt->execute();

        echo "<script> alert('Informações cadastradas com sucesso'); window.location.href='home.php'; </script>";
        exit;

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
<body id="fundo">

<?php  require "topo.php"; ?>

    
    <div class="container">
        <form  method="post">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="texto1" style="text-align: center;margin-top: 2%;margin-bottom: 5%">Pedidos</h1>                
                </div>
            </div>     
            
            <div class="row" style="margin-left: 34%;" > 
                    <div class="col-md-4">
                        <label>Nome</label>
                        <input type="text" class="form-control" placeholder="Nome" name="nome">
                    </div>
                    <div class="col-md-2">
                        <label>Tipo</label>
                        <input type="text" class="form-control" placeholder="Tipo" name="tipo">
                    </div>
            </div> 
            <div class="row"  style="margin-left: 34%;"> 
                    <div class="col-md-4">
                        <label>Comprimento</label>
                        <input type="text" class="form-control" placeholder="Comprimento" name="comprimento">
                    </div>
                    <div class="col-md-2">
                        <label>Largura</label>
                        <input type="text" class="form-control" placeholder="Largura" name="largura">
                    </div>
                    
            </div>
                    <div class="col-md-3" style="margin-left: 35%;">
                            <label>Material</label>
                            <input type="text" class="form-control" placeholder="Material" name="material">
                     </div>
            
        <div class="row" style="text-align: center;margin-top: 2%;">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="width: 30%;text-align: center;" name="enviar">Enviar</button>
                </div>
        </div>
       </form>
    </div>










 
</body>
</html>