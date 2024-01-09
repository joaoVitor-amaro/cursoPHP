<?php 
    include_once "php_action/db_connect.php";
    session_start();
    $matriculaUsuario = $_SESSION['matricula'];
    $sql = "SELECT * FROM user WHERE matricula='$matriculaUsuario'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1 style="text-align: center;">Dados do Usuário</h1>
        <p><strong>Matrícula:</strong> <?=$dados['matricula']?></p>
        <p><strong>Nome:</strong> <?=$dados['nome']?></p>
        <p><strong>E-mail:</strong> <?=$dados['email']?></p>
        <p><strong>Idade:</strong> <?=$dados['idade']?> anos</p>
        <a href="php_action/logout.php">Sair</a>
    </main>
</body>
</html>