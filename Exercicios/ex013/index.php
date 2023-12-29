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
        $dt_nasc = $_POST['dt_nasc'] ?? 2000;
        $anoDesejado  = $_POST['anoDesejado '] ?? date('Y');
        $idadeDesejada = $anoDesejado - $dt_nasc;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="dt_nasc">Em qu ano você nasceu?</label>
        <input type="number" name="dt_nasc" id="dt_nasc" step="1" value="<?=$dt_nasc?>">
        <label for="anoDesejado ">Quer saber sua idade em qual ano? (Atualmente estamos em <strong><?=$anoDesejado?></strong>)</label>
        <input type="number" name="anoDesejado " id="anoDesejado " value="<?=$anoDesejado ?>">
        <input type="submit" value="Qual será a sua idade?">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <p><?="Quem nasceu em $dt_nasc vai ter <strong>$idadeDesejada anos</strong> em $anoDesejado"?></p>
    </section>
</body>
</html>