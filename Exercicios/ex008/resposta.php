<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Conversão de moeda com api -->
    <?php
        $inico = date('m-d-Y', strtotime('-7 days'));
        $fim = date('m-d-Y');
        //Url do api do banco central do Brasil
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inico.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true); //Faz a requisição da url api(file_get_contents) e transforma em formato json(json_decode)
        $cotacaoAtual = $dados['value'][0]['cotacaoCompra'];//Busca o valor do dolar
        $moneyValueBRL = $_GET['moneyValue'] ?? 0; //Pega o dado do formulário 
        $moneyUSDConvertido = $moneyValueBRL / $cotacaoAtual; //Coverte a moeda real para dolar
        $moneyUSDConvertido = number_format($moneyUSDConvertido, 2); //Formatação de number para 2 casas decimais
        $moedaPadrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //Formata o número em formato de de moeda
    ?>
    <section>
    <h1>Conversor de Moedas v1.0</h1>
        <p><?echo "Seus ".numfmt_format_currency($moedaPadrao, $moneyValueBRL, "BRL")." Equivalem <strong>".numfmt_format_currency($moedaPadrao, $moneyUSDConvertido, "USD")."</strong>"?></p>
        <p>Cotação obtida diretamente no site do <a href="https://www.bcb.gov.br/" target="_blank">Banco Central do Brasil</a></p>
        <a href="javascript:history.go(-1)"><button><-Voltar</button></a>
    </section>
</body>
</html>