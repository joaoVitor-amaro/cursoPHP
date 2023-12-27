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
        //Capturando os dados do formulários
        $valor1 = $_GET['numberOne'] ?? 0;
        $valor2 = $_GET['numberTwo'] ?? 0;
     ?>
    <main>
        <!-- Utiliza a superglobal $_SERVER para enviar dados para o mesmo servidor -->
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="numberOne" id="v1" value="<?=$valor1?>">
            <label for="v2"> valor 2 </label>
            <input type="number" name="numberTwo" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado"> 
        <h1>Resultado da Soma</h1>
        <?php 
            $soma = $valor1 + $valor2;
            echo "A soma é $soma"
        ?>
        
    </section>
</body>
</html>