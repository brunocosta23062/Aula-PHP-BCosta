
    <?php


    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        echo "Nome: " . $nome . "<br>" . 
            "idade: " . $idade . " anos"; 
    }else{

        echo "Po meu, coloca o bagui ai e aperta no negocio entendeu calabreso ";

    }


?>