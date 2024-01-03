<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Estrutura de repetição for, no qual sabe o n° de repetição
        //$cont =0 -> Declaração da variável
        //$cont <= 10 -> Expressão da est. de repetição
        //$cont++ => Incremento da estrutura de repetição
        for ($cont =0; $cont <= 10; $cont++):
            echo "$cont <br>";
        endfor;
        echo "<hr>";
        $cores = array("verde", "azul", "roxo");
        //Estrutura de repetição para percorrer arrays
        //Exibe os valores do array
        foreach($cores as $valor):
            echo "A cor é $valor <br>";
        endforeach;
    ?>
</body>
</html>