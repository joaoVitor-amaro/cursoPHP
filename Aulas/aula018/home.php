<?php 
    require_once "db_connect.php";
    //Incia a sessão
    session_start();

    //Verifica se a sessão id_user está vazia, caso esteja, redereciona para a página index.php
    if(!isset($_SESSION['id_user'])):
        header('location:index.php');
    endif;

    //Pega o id do user que foi criado quando é feito o login
    $UserId = $_SESSION['id_user'];
    //Faz a consulta no banco de dados do user que fez o login
    $sql = "SELECT * FROM user WHERE id = '$UserId'";
    //Realiza a consulta no banco de dados
    $resultado = mysqli_query($connect, $sql);
    //Converte os dados retornados em um array
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Exibe os dados do user que fez o login 
        echo "Olá, ".$dados['nome']." o seu cargo é ".$dados['login']."<br>";
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>