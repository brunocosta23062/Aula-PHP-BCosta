
<?php


    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $nivel = $_POST['nivel'];
        $email= $_POST['email'];   
        $senha = $_POST['senha'];  
        $status = $_POST['status'];
       


        if(empty($nome)){

            echo "<script> alert('Campo Nome em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($cpf)){

            echo "<script> alert('Campo CPF em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($endereco)){

            echo "<script> alert('Campo Endereço em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($nivel)){

            echo "<script> alert('Campo nivel em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($email)){

            echo "<script> alert('Campo Email em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($senha)){

            echo "<script> alert('Campo Senha em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($status)){

            echo "<script> alert('Campo Status em branco'); window.location.href='1.php'; </script>";

        }
        

        echo "Nome: " . $nome . "<br>" . 
            "CPF:" . $cpf . "<br>" .
            "Enderecço: " . $endereco. "<br>" . 
            "Nivel: " . $nivel . "<br>" .
            "Email: " . $email . "<br>" .
            "Senha: " . $senha . "<br>" . 
            "Status: " . $status . "<br>";
    }else{

    echo "<script> alert('Clique no botão'); window.location.href='1.php'; </script>";

    
    }



?>