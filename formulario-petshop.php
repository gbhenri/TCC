<?php

    $dbhost = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'formulario-prtshop';

    $conexao = new mysqli ($dbhost,$dbusername,$dbpassword,$dbname);

    if($conexao->connect_error)
    {
        echo "erro";
    }
else
{
    echo "conexão efetuada com sucesso!"
}



?>