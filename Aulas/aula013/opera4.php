<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores Lógicos</h1>
    <?php 
        $idade = 15;
        $nome = "João";
        // Operador Lógico e -> (&& ou and)
        // Só retorna em verdadeiro em caso se as duas condições sejam verdadeiras
        if (($idade == 25) and ($nome == "João")):
            echo "É verdadeiro";
        else:
            echo "É Falso";
        endif;
        echo "<br>";

        // Operador lógico ou -> (|| ou or)
        //Retorna verdairo se somente 1 condição seja verdadeira
        if (($idade == 15) || ($nome == "Carlos")):
            echo "É verdadeiro";
        else:
            echo "É Falso";
        endif;
        echo "<br>";

        //Operador lógico ou exclusivo (xor)
        // Retorna verdadeiro se 1 única condição seja verdade, se as duas for verdadeira retorna falso
        if (($idade == 15) xor ($nome == "João")):
            echo "É verdadeiro";
        else:
            echo "É Falso";
        endif;
        echo "<br>";
        //Operador de negação -> (!)
        //Operador que inverte o estado da condição, se for verdadeira, inverterá o estado para falso
        if (!($idade == 15) and ($nome == "João")):
            echo "É verdadeiro";
        else:
            echo "É Falso";
        endif;
    ?>
</body>
</html>