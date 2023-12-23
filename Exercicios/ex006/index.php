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
        //Função de gerar números aleatórios
        $numberAleatorio = rand(0,100);
    ?>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerador de números aleatórios</p>
        <p>O valor gerado foi <strong><? echo $numberAleatorio; ?></strong></p>
        <form action="index.php">
            <input type="submit" value="Gerar outro">
        </form>
    </section>
</body>
</html>