<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $number = (int)$_GET['numberInput'];
        $antecessorNumber = $number - 1;
        $sucessorNumber = $number + 1;
    ?>
    <section>
        <h1>Resultado Final</h1>
        <p>O número escolhido foi <strong><? echo $number ?></strong></p>
        <p>O seu antecessor é <? echo $antecessorNumber ?></p>
        <p>O seu sucessor é <? echo $sucessorNumber ?></p>
        <button><a href="javascript:history.go(-1)"><-Voltar</a></button>
    </section>
</body>
</html>