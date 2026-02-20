<?php

    //Chama e conecta a uma variavel
    require "Predios.php";
    $novo_predio = new Predios;

    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $numero = $_POST['numero'];
        $altura = $_POST['altura'];
        $largura = $_POST['largura'];
        $quantidade = $_POST['quantidade'];

        //Validação de campos em branco
        if(empty($nome)){

            echo "<script> alert('Campo Nome em branco'); window.location.href='Predios.php'; </script>";

        }
        if(empty($numero)){

            echo "<script> alert('Campo Numero em branco'); window.location.href='Predios.php'; </script>";

        }
        if(empty($altura)){

            echo "<script> alert('Campo Altura em branco'); window.location.href='Predios.php'; </script>";

        }
        if(empty($largura)){

            echo "<script> alert('Campo Largura em branco'); window.location.href='Predios.php'; </script>";

        }
        if(empty($quantidade)){

            echo "<script> alert('Campo Quantidade em branco'); window.location.href='Predios.php'; </script>";

        }

        //chamamos a variavel de conexao com a classe e entregamos os valores a cada uma delas

        $novo_predio->setNome($nome);
        $novo_predio->setNumero($numero);
        $novo_predio->setAltura($altura);
        $novo_predio->setlargura($largura);
        $novo_predio->setQuantidade($quantidade);


        echo "Aqui tem: " . $quantidade;
        echo "Aqui tem: " . $novo_predio->getQuantidade();

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

    <title>Aula 8</title>
  </head>
  <body id="caixaCadastroBody">
    
    

    <div id="caixaCadastroEsquerda" class="container">

    <form method="post">

            <div class="row">
               

            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Nome Do Predio</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="col-md-6">
                    <label>Numero Do Predio</label>
                    <input type="number" class="form-control" name="numero">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Altura do Predio</label>
                    <input type="text" class="form-control" name="altura">
                </div>
                <div class="col-md-6">
                    <label>Largura Do Predio</label>
                    <input type="text" class="form-control" name="largura">
                </div>
                <div class="row">
                <div class="col-md-6">
                    <label>Residentes Do Predio</label>
                    <input type="text" class="form-control" name="quantidade">
                </div>
            <div class="row" id="caixaCadastroBtn">
                <div class="col-md-1">
                    <button class="btn btn-primary" name="enviar">Enviar</button>
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

<?php

    if($novo_predio->getNome() != "" && 
      $novo_predio->getNumero() != "" &&
      $novo_predio->getaltura() != "" &&
      $novo_predio->getLargura() != "" &&
      $novo_predio->getQuantidade() != "" ){

            echo "Nome do Predio: " . $novo_predio->getNome() . "<br>" .
                "Numero do Predio: " . $novo_predio->getNumero() . "<br>" .
                "Altura do Predio: " . $novo_predio->getaltura() . "<br>" .
                "Quantidade do Predio: " . $novo_predio->getQuantidade() . "<br>" .
                "Largura do Predio: " . $novo_predio->getLargura() . "<br>";

      }



?>