<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores de incrementa e decremento</h1>
    <?php 
        $valor = 20;
        //Pré-incremento
        //Soma + 1 do valor que foi atribuido a variável
        //Primeiro realiza o incremento
        //$valor = $valor + 1
        //echo ++$valor;
       

        // Pós-incremento
        //Primeiro imprime o valor da variável e depois incrementa
        //echo $valor++;

        // Pré decremento
        //Realiza o decremento e retorna o valor
        //echo --$valor

        // Pós decremento
        //Primeiro retorna o valor atual da varíável e depois realiza o decremento
        echo $valor--;
        echo "<br>";
        echo $valor;
    ?>
</body>
</html>