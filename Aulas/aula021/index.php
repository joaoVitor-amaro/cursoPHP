<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cookie</h1>
    <?php 
        //Criação do cookie
        //User -> nome do cookie
        //"João Vitor" -> valor do cookie
        //time()+3600 -> tempo do cookie
        setcookie('user', "João Vitor", time()+3600);
        setcookie('email', "joaoovitoramaro71@gmail.com", time()+3600);
        setcookie("ultima_pesquisa","Tênis Nike", time()+3600);

        //Acessando o valor do cookie
        echo $_COOKIE['ultima_pesquisa'];
        
    ?>
</body>
</html>