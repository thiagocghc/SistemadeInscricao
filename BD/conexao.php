<?php

    $dbHost = 'localhost';
    $dbUsername = 'your_username';
    $dbPassword = 'yourpasswd';
    $dbName = 'your_database';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        //echo "Você Consegue... Primeira Etapa realizada com sucesso...";
    }

?>
