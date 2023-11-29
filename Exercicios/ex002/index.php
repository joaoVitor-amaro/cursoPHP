<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Horário e Dia</h1>
    <?php 
        //Pega o timezone do brasil
        date_default_timezone_set("America/Sao_Paulo");
        $data = date('d/M/Y');//Variável que recebe a data como valor
        $hora = date('G:i:s');//Variável que recebe a hora como valor
    ?>
    <ul>
        <!-- Chama as variáveis e imprime o valor atráves de uma short open tag PHP -->
        <li><strong>Data:</strong> <? echo "{$data}"; ?></li>
        <li><strong>Hora:</strong> <? echo "{$hora}" ?> </li>
    </ul>
</html>