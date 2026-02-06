
<?php


    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];
        $estado = $_POST['estado'];   
        $sexo = $_POST['sexo'];  
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];
        $cidade = $_POST['cidade'];


        if(empty($nome)){

            echo "<script> alert('Campo Nome em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($email)){

            echo "<script> alert('Campo Email em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($telefone)){

            echo "<script> alert('Campo Telefone em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($celular)){

            echo "<script> alert('Campo Bairro em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($numero)){

            echo "<script> alert('Campo Numero em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($cidade)){

            echo "<script> alert('Campo Cidade em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($sexo)){

            echo "<script> alert('Campo Sexo em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($estado)){

            echo "<script> alert('Campo Estado em branco'); window.location.href='1.php'; </script>";

        }
        

        echo "Nome: " . $nome . "<br>" . 
             "Email:" . $email . "<br>" .
             "Telefone: " . $telefone . "<br>" .
             "Celular: " . $celular . "<br>" . 
             "Estado: " . $estado . "<br>" .
             "Sexo: " . $sexo . "<br>" .
             "Bairro: " . $bairro . "<br>" . 
             "Cidade: " . $cidade . "<br>" .
             "Numero: " . $numero . "<br>"; 

    }else{

    echo "<script> alert('Clique no botão'); window.location.href='1.php'; </script>";

    
    }



?>