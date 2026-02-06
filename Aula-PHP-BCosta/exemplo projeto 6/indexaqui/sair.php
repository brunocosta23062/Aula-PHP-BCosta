<?php 

    session_start();

    if($_SESSION['logado'] == TRUE){

        session_destroy();
        header("location: ../index.php");
    }else{

        session_destroy();

    }


?>