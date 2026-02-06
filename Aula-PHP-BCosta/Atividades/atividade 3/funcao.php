
<?php


    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $date = $_POST['date'];
        $sexo = $_POST['sexo'];
        $estado = $_POST['estado'];  
        $renda = $_POST['renda'];
       


        if(empty($nome)){

            echo "<script> alert('Campo Nome em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($cpf)){

            echo "<script> alert('Campo CPF em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($date)){

            echo "<script> alert('Campo Data de nascimento em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($sexo)){

            echo "<script> alert('Campo Sexo em branco'); window.location.href='1.php'; </script>";

        }
        
        if(empty($estado)){

            echo "<script> alert('Campo Estado em branco'); window.location.href='1.php'; </script>";

        }
        if(empty($renda)){

            echo "<script> alert('Campo Renda em branco'); window.location.href='1.php'; </script>";

        }
        

        echo "Nome: " . $nome . "<br>" . 
            "CPF:" . $cpf . "<br>" .
            "Data: " . $date. "<br>" . 
            "Sexo: " . $sexo . "<br>" .
            "Estado: " . $estado . "<br>" . 
            "Renda: " . $renda . "<br>";
    }else{

    echo "<script> alert('Clique no botão'); window.location.href='1.php'; </script>";

    
    }



?>