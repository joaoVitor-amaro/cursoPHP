<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Condição simples
        $number = 8;
        //Verifica se a condição é verdadeira
        if ($number == 10): 
            //Executa este trecho de código caso a condição seja verdadeira
            echo "Number igual a 10";
        endif; //Determina o fim do if

        //Condição composta
      
        if ($number == 10):
            //executa esse código caso seja verdadeira
            echo "Number igual a 10";
        else:
            //Caso contrário, se a outra condição não for verdadeira, executará este trecho
            echo "Diferente de 10";
        endif;

        //Condição Aninhadas
        if ($number == 10):
            //executa esse código caso seja verdadeira
            echo "Number igual a 10";
        //Uma execução condição para verificar se é verdadeira
        elseif ($number <= 9):
            echo "Menor que 10";
        else:
            //Caso contrário, se a outra condição não for verdadeira, executará este trecho
            echo "Diferente de 10";
        endif;
        echo "<hr>"
        //Operador ternário para simplificar o if e else
    ?>
</body>
</html>