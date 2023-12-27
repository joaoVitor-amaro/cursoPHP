<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <pre>
            <?php
                //SuperGlobal são enviados em formato de objeto
                //SuperGlobal GET, envia dados ao servidor pela URL
                echo "<h1>Superglobal GET</h1>";
                var_dump(($_GET));

                //Superglobal POST
                //Os dados não ficam vísivel na URL
                echo "<h1>Superglobal POST</h1>";
                var_dump(($_POST));

                //Superglobal Resquest
                //Unifica as superglobais get e post e tranforma em um único objeto
                echo "<h1>Superglobal POST</h1>";
                var_dump(($_REQUEST));


                //Superglobal COOKIE
                //Armazena informações pr um determinado tempo no navegador
                //Dia-da-semana é a chave e "SEGUNDA" é o valor do objeto, que vai ficar armazenado por 1hr
                setcookie('Dia-da-semana', "SEGUNDA", time() + 3600); //Define o tempo que vai durar a informação 
                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);
                
                //SUPERGLOBAL SESSION   
                echo "<h1>Superglobal Session</h1>";
                session_start(); //inicia a sessão
                $_SESSION['teste'] = "FUNCIONOU";//Cria um chave chamada teste e tem o valor "Funcionou" no objeto
                var_dump($_SESSION);
            ?>
        </pre>
    </section>
</body>
</html>