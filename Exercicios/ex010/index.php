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
        //Pega os dados do formulário
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1; 
        $divisaoReal = intdiv($dividendo, $divisor); //Função para calcular a divisão inteira
        $restoDivisao = $dividendo % $divisor; //Calcular o resto da divisão
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>  
            <input type="number" name="dividendo" id="dividendo" value="<?=0?>" step="1">    
            <label for="divisor">Divisor</label>  
            <input type="number" name="divisor" id="divisor" value="<?=1?>" step="1"> 
            <input type="submit" value="Calcular">     
        </form>
    </main>
    <section>
        <h1>Estrutura da divisão</h1>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$restoDivisao?></td>
                <td><?=$divisaoReal?></td>
            </tr>
        </table>
    </section>
</body>
</html>