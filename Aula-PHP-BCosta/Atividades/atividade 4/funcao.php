
<?php


    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $cnpj = $_POST['cnpj'];
        $insc = $_POST['insc'];  
        $lougra = $_POST['lougra'];
        $bairro = $_POST['bairro'];
        $municipio = $_POST['municipio'];
        $uf = $_POST['uf'];
        $cep = $_POST['cep'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
       


        if(empty($nome)){

            echo "<script> alert('Campo Nome em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($cnpj)){

            echo "<script> alert('Campo cnpj em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($insc)){

            echo "<script> alert('Campo Inscrição  em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($lougra)){

            echo "<script> alert('Campo Lougradouro em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($bairro)){

            echo "<script> alert('Campo Bairro em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($municipio)){

            echo "<script> alert('Campo Municipio em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($uf)){

            echo "<script> alert('Campo UF em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($cep)){

            echo "<script> alert('Campo CEP em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($telefone)){

            echo "<script> alert('Campo Telefone em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($email)){

            echo "<script> alert('Campo email em branco'); window.location.href='1.php'; </script>";

        }
        

        echo "Nome: " . $nome . "<br>" . 
            "Cnpj:" . $cnpj . "<br>" .
            "Email: " . $email . "<br>" .
            "Insc: " . $insc . "<br>" . 
            "Lougradouro: " . $lougra . "<br>" .
            "Bairro:  " . $bairro. "<br>" .
            "Municipio:  " . $municipio . "<br>" .
            "Uf:  " . $uf . "<br>" .
            "Cep: " . $cep . "<br>" .  
            "Telefone: " . $telefone . "<br>";
            
    }else{

    echo "<script> alert('Clique no botão'); window.location.href='1.php'; </script>";

    
    }



?>