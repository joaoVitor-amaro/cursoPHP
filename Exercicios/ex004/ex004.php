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
            $numberOne = (float)$_GET['numberOne'] ?? 0;
            $numberTwo = (float)$_GET['numberTwo'] ?? 0;
            $soma = $numberOne + $numberTwo;
        ?>
        <p><? echo "A soma entre $numberOne e $numberTwo é igual a $soma" ?></p>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>
</body>
</html>