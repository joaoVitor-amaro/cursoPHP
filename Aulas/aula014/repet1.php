<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Contador para manipular a expressão da estrutura de repetição
        $cont = 0;
        //Estrutura WHILE
        //Estrutura de repetição com a expressão no ínicio
        //Somente será executado este trecho de código, caso a expressão seja verdadeira 
        while ($cont <= 10):
            ++$cont;
            echo " $cont ->";
        endwhile;
        echo "Fim <br>";
        
        $cont = 0;
        //Estrutura DO While
        do {
            echo " $cont ->";
            ++$cont;
        } while($cont <= 10);
    ?>
</body>
</html>