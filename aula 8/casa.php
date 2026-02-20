<?php

    //chama os arquivos
    require "Mae.php";
    require "filho.php";
    require "filha.php";

    //conecta os arquivos com variaveis nesse codigo
    $info_mae = new Mae;
    $info_filho = new filho;
    $info_filha = new filha;

    //imprimir em tela
    echo "Nome da mãe: " . $info_mae->nome . "<br>" . 
        "Idade da mãe: " . $info_mae->idade . "<br>" . 
        "Altura da mãe: " . $info_mae->altura . "<br>" ;
          
         
    echo"<br>" . "<br>";
    echo "Nome da filho: " . $info_filho->nome . "<br>" .
         "Idade da filho: " . $info_filho->idade . "<br>" . 
         "Altura da filho: " . $info_filho->altura . "<br>";
         
    echo"<br>" . "<br>";
    echo "Nome da filha: " . $info_filha->nome . "<br>" .
          "Idade da filha: " . $info_filha->idade . "<br>" .
         "Altura da filha: " . $info_filha->altura . "<br>";
    echo"<br>" . "<br>";



?>