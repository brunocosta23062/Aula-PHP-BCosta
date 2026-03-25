<?php

    require "../Controller/Action_SQL.php";

    //Instancia de action sql
    $nova_delecao = new Action_SQL;

    //Recebe o id
    $id = $_GET['id'];

    //Acessa a função de deletar na classe e entrega o valor do id
    $nova_delecao->deletar($id);

    
?>