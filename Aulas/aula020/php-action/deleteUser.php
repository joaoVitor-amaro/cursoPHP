<?php 
    require_once "db_connect.php";
    if(isset($_GET['id'])):
        $idUser = $_GET['id'];
        $sqlDelete = "DELETE FROM clientes WHERE id='$idUser'";
        if(mysqli_query($connect, $sqlDelete)):
            header("location: ../index.php?sucesso");
        else:
            header("location: ../index.html?erro");
        endif;
    endif;
?>