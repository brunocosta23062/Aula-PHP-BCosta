<?php

    require "conexao_exemplo.php";

    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $genero = $_POST['genero'];
        $estadocivil = $_POST['estadocivil'];

       

        //Validação de campos em branco
        if(empty($nome)){

            echo "<script> alert('Campo Nome em branco'); window.location.href='inserir.php'; </script>";

        }
        if(empty($idade)){

            echo "<script> alert('Campo Idade em branco'); window.location.href='inserir.php'; </script>";

        }
         if(empty($sexo)){

            echo "<script> alert('Campo Sexo em branco'); window.location.href='inserir.php'; </script>";

        }
         if(empty($genero)){

            echo "<script> alert('Campo Genero em branco'); window.location.href='inserir.php'; </script>";

        }
         if(empty($estadocivil)){

            echo "<script> alert('Campo Estado Civil em branco'); window.location.href='inserir.php'; </script>";

        }


        $stmt = $pdo->prepare("INSERT INTO projeto (nome, idade, sexo, genero, estadocivil) VALUES (:nome, :idade, :sexo, :genero, :estadocivil)");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":idade", $idade);
        $stmt->bindParam(":sexo", $sexo);
        $stmt->bindParam(":genero", $genero);
        $stmt->bindParam(":estadocivil", $estadocivil);
        $stmt->execute();

        echo "<script> alert('Informações cadastradas com sucesso'); window.location.href='inserir.php'; </script>";


    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 8</title>
</head>
<body>

    <form method="post">
        <label>Nome: </label>
        <input type="text" name="nome">

        <br>

        <label> Idade: </label>
        <input type="text" name="idade">

        <br>

        <label> Sexo: </label>
        <input type="text" name="sexo">

        <br>

        <label> Genero: </label>
        <input type="text" name="genero">

        <br>

        <label> Estado CIvil: </label>
        <input type="text" name="estadocivil">

        <br>

        <button type="submit" name="enviar">Enviar</button>



    </form>

</body>
</html>