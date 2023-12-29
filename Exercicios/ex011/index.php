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
        $valueNumber = $_POST['number'] ?? 1;
        $raizQuadrada = $valueNumber**(1/2);
        $raizCubica = $valueNumber**(1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="number">Número</label>
            <input type="number" name="number" id="number" step="1" value="<?=$valueNumber?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        //Formatação de número
        //number_format() função para adicionar certa quantidade casas decimais
        $raizQuadrada = number_format($raizQuadrada, 3, ",", "");
        $raizCubica = number_format($raizCubica, 3, ",", ""); 
    ?>
    <section>
        <h1>Resultado Final</h1>
        <P>Analisando o <strong>número <?=$valueNumber?></strong>, temos</P>
        <ul>
            <li>A sua raiz quadrada é <?=$raizQuadrada?></li>
            <li>A sua raiz cúbica é <?=$raizCubica?></li>
        </ul>
    </section>
</body>
</html>