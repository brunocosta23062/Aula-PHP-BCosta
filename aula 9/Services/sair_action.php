<?php

    session_start();

    if($_SESSION['logado'] == TRUE){

        //Destroi a sessão e manda de volta para a tela de login
        session_destroy();
        header("Location: ../index.php");

    }else{

        session_destroy();
        header("Location: ../index.php");

    }


?>