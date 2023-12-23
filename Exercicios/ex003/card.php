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
        <?php
            //Pega os dados dos campos do formulário
            $nomeFuncionario = $_GET['nomefUNC'] ?? "desconhecido";
            $salarioFunc = (int)$_GET["salarioFunc"] ?? 0;
            //exibe os dados que foram enviados do formulário
            echo "Funcionário(a) $nomeFuncionario tem um salário de \$$salarioFunc"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>
</body>
</html>