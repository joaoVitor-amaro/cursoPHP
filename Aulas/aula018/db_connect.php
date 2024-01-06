<?php 
    //Conexão de banco de dados
    $serveName = "localhost";//Nome do servidor do BD
    $userName = "root";//User do BD
    $password = "";//Senha do user do BD
    $db_name = "sistema_login";//Nome do BD

    $connect = mysqli_connect($serveName, $userName, $password, $db_name);

    //Verifica se acontenceu um erro na conexõo
    if(mysqli_connect_error()):
        echo "Erro na conexão".mysqli_connect_error();
    endif;
?>