<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo PHP</h1>
    <?php 
        //pega o timezone do Brasil
        date_default_timezone_set('America/Sao_Paulo');
        //pega dia, mês e ano do servidor, a partir do timezone 
        echo "Hoje é dia ". date('d/M/Y');
        //Pega o horário do sevidor a partir do timezone
        echo " e a hora é ". date('G:i:s')
    ?>
</body>
</html>