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
        //Pega o salário do usuário e converte em quantidade de salários minimos + sobra
        $salarioValueUser = $_GET['salarioUser'] ?? 1320;
        $qt_salarioMinimo = $salarioValueUser / 1320;
        $restoSalarioMininoUser = $salarioValueUser % 1320;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="salarioUser">Salário R$</label>
        <input type="number" name="salarioUser" id="salarioUser">
        <p>Considerando o salário mínimo de <strong>R$1.320,00</strong></p>
        <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        //formatção para a moeda de internacionalização e para a moeda brasileira
        $moedaPadrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $salarioValueUser = numfmt_format_currency($moedaPadrao,$salarioValueUser, "BRL");
        $restoSalarioMininoUser = numfmt_format_currency($moedaPadrao, $restoSalarioMininoUser, "BRL");
    ?>
    <section>
        <h1>Resultado Final</h1>
        <p>Quem recebe um salário de <?=$salarioValueUser?> ganha <strong><?=(int)$qt_salarioMinimo?> salários mínimos</strong> + <?=$restoSalarioMininoUser?></p>
    </section>
</body>
</html>