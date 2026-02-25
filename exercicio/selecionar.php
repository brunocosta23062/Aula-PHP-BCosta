<?php 


    require"conexao.php";

    $stmt = $pdo->prepare("SELECT * FROM aula8");
    $stmt->execute();

?>