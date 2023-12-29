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
        $tempoSegundos = $_POST['qt_seconds'] ?? 0;
        $restoSeconds = $tempoSegundos;
        //total de semana
        $semana = intdiv($restoSeconds, 604800);
        $restoSeconds = $restoSeconds % 604800;
        //total de dias
        $dia = intdiv($restoSeconds, 86400);
        $restoSeconds = $restoSeconds % 86400;
        //total de hora
        $hora = intdiv($restoSeconds, 3600);
        $restoSeconds = $restoSeconds % 3600;
        //total de minutos
        $minutos = intdiv($restoSeconds, 60);
        $restoSeconds = $restoSeconds % 60;
        //total de segundos
        $segundos = $restoSeconds;
    ?>
    <main>
        <h1>Claculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="qt_seconds">Qual é o total de segundo?</label>
            <input type="number" name="qt_seconds" id="qt_seconds" value="<?=$tempoSegundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Totalizando Tudo</h1>
        <p>Analisando o valor que você digitou, <strong><?=$tempoSegundos?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>