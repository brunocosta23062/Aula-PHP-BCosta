
    <?php


    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $Estadocivil = $_POST['Estadocivil'];

        echo "Nome: " . $nome . "<br>" . "idade: " . $idade . " idade" . "<br>" . "sexo: " . $sexo . "<br>" . "Estado civil: " . $Estadocivil . "<br>"  ; 
    }else{

        echo "Po meu, coloca o bagui ai e aperta no negocio entendeu calabreso ";

    }


?>