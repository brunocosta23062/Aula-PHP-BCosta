
<?php


    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $estado = $_POST['estado'];    
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];


        if(empty($nome)){

            echo "<script> alert('Campo Nome em branco'); window.location.href='cadastro.php'; </script>";

        }
        if(empty($idade)){

            echo "<script> alert('Campo Idade em branco'); window.location.href='cadastro.php'; </script>";

        }
        if(empty($rg)){

            echo "<script> alert('Campo rg em branco'); window.location.href='cadastro.php'; </script>";

        }
        if(empty($cpf)){

            echo "<script> alert('Campo cpf em branco'); window.location.href='cadastro.php'; </script>";

        }
        if(empty($estado)){

            echo "<script> alert('Campo estado em branco'); window.location.href='cadastro.php'; </script>";

        }
        if(empty($bairro)){

            echo "<script> alert('Campo bairro em branco'); window.location.href='cadastro.php'; </script>";

        }
        if(empty($numero)){

            echo "<script> alert('Campo numero em branco'); window.location.href='cadastro.php'; </script>";

        }

        echo "Nome: " . $nome . "<br>" . 
             "Idade:" . $idade . "<br>" .
             "RG: " . $idade . "<br>" .
             "CPF: " . $cpf . "<br>" . 
             "Estado Civil: " . $estado . "<br>" .
             "Bairro: " . $bairro . "<br>" . 
             "Numero: " . $numero . "<br>"; 

    }else{

    echo "<script> alert('Clique no botão'); window.location.href='cadastro.php'; </script>";

    
    }



?>