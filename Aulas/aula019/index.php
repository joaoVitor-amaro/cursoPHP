<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRIPTOGRAFIA/CODIFICAÇÃO</h1>
    <?php 
        $senha = "123456";
        $novaSenha = base64_encode($senha); //Codifica a senha
        echo "Base64: ".$novaSenha."<br>"; //descodifica a senha
        //Decodfica a senha
        echo "Sua senha é: ".base64_decode($novaSenha);
        echo "<hr>";
        //Criptografa a senha em 32 caracteres
        echo "MD5: ".md5($senha)."<br>";
        echo "SHAR1: ". sha1($senha)."<br>";
        $senha_db = '$2y$10$4FjYOGCu9/anZyRSvT4nuOLJaZUyz9ZfMSdu1krTSUpWR5.n2Lxey';
        
        if (password_verify($senha, $senha_db)):
            echo "Senha válida";
        else:
            echo "Senha inválida";
        endif;
    ?>
</body>
</html>