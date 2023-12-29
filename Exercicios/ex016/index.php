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
        $valorSaque = $_GET['valueSaque'] ?? 0;
        $money = $valorSaque;
        //total notas de 100
        $qtNota100 = intdiv($money, 100);
        $money = $money % 100;
        //Total de notas de 50
        $qtNotas50 = intdiv($money, 50);
        $money = $money % 50;
        //Total de notaas de 20
        $qtNotas20 = intdiv($money, 20);
        $money = $money % 20;
        //Total de notas de 10
        $qtNotas10 = intdiv($money, 10);
        $money = $money % 10;
        //Total Notas de 5
        $qtNota5 = intdiv($money, 5);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valueSaque">Qual valor deseja sacar? (R$)</label>
            <input type="number" name="valueSaque" id="valueSaque" step="5">
            <p>notas disponíveis: R$100, R$50, R$20, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $moedaPadrao = numfmt_create("pt_BRL", NumberFormatter::CURRENCY);
        $valorSaque = numfmt_format_currency($moedaPadrao, $valorSaque, "BRL");
    ?>
    <section>
        <h1 translate="no">Saque de <?=$valorSaque?> Realizado</h1>
        <p translate="no">O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li>
                <img src="image/100-reais.jpg" alt="100 Reais">
                <span>x<?=$qtNota100?></span>
            </li>
            <li>
                <img src="image/50-reais.jpg" alt="50 reais">
                <span>x<?=$qtNotas50?></span>
            </li>
            <li>
                <img src="image/20-reais.jpg" alt="20 reais">
                <span>x<?=$qtNotas20?></span>
            </li>
            <li>
                <img src="image/10-reais.jpg" alt="10 reais">
                <span>x<?=$qtNotas10?></span>
            </li>
            <li>
                <img src="image/5-reais.jpg" alt="5 reais">
                <span>x<?=$qtNota5?></span>
            </li>
        </ul>
    </section>
</body>
</html>