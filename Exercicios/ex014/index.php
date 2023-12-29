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
        //pega dados do formulário
        $ValorProduto = $_GET['priceProduct'] ?? 0;
        $percentualReajuste = $_GET['percentualReajuste'] ?? 0;
        $reajusteValorProduto = $ValorProduto * ((100 + $percentualReajuste) / 100); //Cálculo do aumento do valor do produto
        
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="priceProduct">Preço do Produto (R$)</label>
            <input type="number" name="priceProduct" id="priceProduct" step="0.1" value="<?=$ValorProduto?>">
            <label for="percentualReajuste">Qual Será o percentual do reajuste? <strong><span id="valuePorcentoReajuste"><?=$percentualReajuste?></span>%</strong></label>
            <input type="range" name="percentualReajuste" id="percentualReajuste" min="0" max="100" value="<?=$percentualReajuste?>" oninput="MudarValorPorcento()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
        //Formatação de valores monetários
        $moedaPadrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        //formatação dos valores monetários para a moeda brasileira
        $ValorProduto = numfmt_format_currency($moedaPadrão, $ValorProduto, "BRL");
        $reajusteValorProduto = numfmt_format_currency($moedaPadrão, $reajusteValorProduto, "BRL");
    ?>
    <section>
        <h1>Resultado do Reajuste</h1>
        <p>O produto que custava <?="$ValorProduto com <strong>$percentualReajuste% de aumento</strong>"?> vai passar a custar <strong><?=$reajusteValorProduto?></strong></p>
    </section>
    <script>
       function MudarValorPorcento() {
            var valuePorcentoReajuste = document.getElementById('valuePorcentoReajuste')
            var percentualReajuste = document.getElementById('percentualReajuste')
            valuePorcentoReajuste.innerHTML = `${percentualReajuste.value}`
       }
    </script>
</body>
</html>