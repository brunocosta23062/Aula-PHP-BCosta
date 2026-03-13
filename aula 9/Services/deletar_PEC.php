<?php

    require "../Controller/Action_SQL_PEC.php";

    //Instancia de action sql
    $nova_delecao = new Action_SQL_PEC;

    //Recebe o id
    $id = $_GET['id'];
    $PEC_RECEBIDO =$_GET['PEC_ENVIADO'];

    //Acessa a função de deletar na classe e entrega o valor do id
    $nova_delecao->deletar_PEC($PEC_RECEBIDO, $id);

?>