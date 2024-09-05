<?php

    $dbhost = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'formulario-petshop';

    $conexao = new mysqli ($dbhost,$dbusername,$dbpassword,$dbname);

    if($conexao->connect_error)
    {
        echo "erro";
    }
   
?>