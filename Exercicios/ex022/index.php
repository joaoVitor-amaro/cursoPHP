<?php 
    session_start();
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
        <h1 translate="no">Login</h1>
        <form action="php_action/loginUser.php" method="post">
            <label for="UserMatricula">Matrícula</label>
            <input type="text" name="UserMatricula" id="UserMatricula">
            <?php if(!empty($_SESSION['ErrorMatricula'])):?>
                <p><?=$_SESSION['ErrorMatricula'];?></p>
            <?php endif;?>
            <label for="senhaUser">Senha</label>
            <input type="password" name="senhaUser" id="senhaUser">
            <?php if(!empty($_SESSION['ErrorSenha'])):?>
                <p><?=$_SESSION['ErrorSenha'];?></p>
            <?php endif;?>
            <a href="cadastro.php" target="_top">Cadastra-se</a>
            <input type="submit" name="btn-login" value="Entrar">
        </form>
    </main>
</body>
</html>