<?php 
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $NameDB = "systemlogin";
    $connect = mysqli_connect($serverName, $userName, $password, $NameDB);
    if(mysqli_connect_error()):
        echo "erro na conexão";
    endif;
?>