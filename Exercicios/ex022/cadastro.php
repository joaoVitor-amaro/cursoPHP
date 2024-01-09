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
        <h1>Cadastre-se</h1>
        <form action="php_action/creatUser.php" method="post">
            <label for="matriculaUser">Matrícula</label>
            <input type="text" name="matriculaUser" id="matriculaUser" placeholder="000000000000">
            <label for="nameUser">Nome</label>
            <input type="text" name="nameUser" id="nameUser">
            <label for="emailUser">Email</label>
            <input type="email" name="emailUser" id="emailUser">
            <label for="idadeUser">Idade</label>
            <input type="number" name="idadeUser" id="idadeUser">
            <label for="pwdUser">Senha</label>
            <input type="password" name="pwdUser" id="pwdUser">
            <input type="submit" name="btn-cadaster" value="Cadastrar">
        </form>
    </main>
</body>
</html>