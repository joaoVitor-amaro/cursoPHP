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
        //Código de conversão de real para dolar
        $moneyValue = $_GET['moneyValue'] ?? 0;
        $moneyDolarConvertido = $moneyValue / 4.86;
        $moneyDolarConvertido = number_format($moneyDolarConvertido, 2, ",", "")
    ?>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <p><? echo "Seus \$ $moneyValue equivalem a <strong> US$ $moneyDolarConvertido</strong>" ?></p>
        <p><strong>Cotação fixa de R$4.86</strong> informada diretamente no código</p>
        <button><a href="javascript:history.go(-1)"><-Voltar</a></button>
    </section>
</body>
</html>