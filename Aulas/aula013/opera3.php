<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores de comparação</h1>
    <?php 
        //Operador de igualdade
        //Verifica se uma valor tem o mesmo valor que o outro
        if (10 == '10'):
            echo "Positivo";
        else:
            echo "Negativo";
        endif;
        echo "<br>";

        //Operador de diferente
        //Verifica somente se os valores são diferentes
        if (10 != 10):
            echo "Positivo";
        else:
            echo "Negativo";
        endif;
        echo "<br>";

        //Operador de maior que
        //Verifica se um valor é maior queo outro
        if (10 > 5):
            echo "Positivo";
        else:
            echo "Negativo";
        endif;
        echo "<br>";

        //Operador de maior ou igual
        //Verifica se um valor é maior ou igual ao outro 
        if (10 >= 5):
            echo "Positivo";
        else:
            echo "Negativo";
        endif;
    ?>
</body>
</html>