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
        //Pegando dados do formulários
        $valueOne = $_GET["valueOne"] ?? 0;
        $valueTwo = $_GET["valuetwo"] ?? 0;
        $pesoMediaOne = $_GET['pesoMediaOne'] ?? 1;
        $pesoMediaTwo = $_GET['pesoMediaTwo'] ?? 1;
        $mediaSimples = ($valueOne + $valueTwo)/2; //Cáculo da média simples
        $mediaPonderada = (($valueOne * $pesoMediaOne) + ($valueTwo * $pesoMediaTwo)) / ($pesoMediaOne + $pesoMediaTwo);//Cálculo da média ponderada
    ?>
    <main>
        <h1>Média Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valueOne">1° Valor</label>
            <input type="number" name="valueOne" id="valueOne" value="<?=$valueOne?>">
            <label for="pesoMediaOne">1° Peso</label>
            <input type="number" name="pesoMediaOne" id="pesoMediaOne" value="<?=$pesoMediaOne?>">    
            <label for="valuetwo">2° Valor</label>
            <input type="number" name="valuetwo" id="valuetwo" value="<?=$valueTwo?>">
            <label for="pesoMediaTwo">2° Peso</label>
            <input type="number" name="pesoMediaTwo" id="pesoMediaTwo" value="<?=$pesoMediaOne?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        //formatção das médias para ter uma virgula e só duas casas de decimais
        $mediaSimples = number_format($mediaSimples, 2, ",", "");
        $mediaPonderada = number_format($mediaPonderada, 2,",", "")
    ?>
    <section>
        <h1>Cálculos das médias</h1>
        <p>Analisando os valores <?="$valueOne e $valueTwo"?></p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=$mediaSimples?></li>
            <li>A <strong>Média Aritmética ponderada</strong>com pesos <?="$pesoMediaOne e $pesoMediaTwo é igual a $mediaPonderada"?></li>
        </ul>
    </section>
</body>
</html>