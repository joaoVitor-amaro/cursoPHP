<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Criado um array com os valores já armazenados 
        //Os índices podem ser modificados para qualquer outro valor de índice
        $carro = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
        echo "$carro[1]<br>";//Pega o valor oeli índice
        $carro[] = "Amarok";//Adciona um valor no últmo índice
        $carro[10] = "Camaro"; //Adicona uma valor em um certo indice específico
        print_r($carro); //Funçaõ de imprimir todo o array
        echo "<hr>";
        //Estrutura de repetição para percorrer o indice e os valors do array
        foreach ($carro as $posi => $valor):
                echo "$posi -> $valor <br>";
        endforeach;
        $clientes = ["jv", "tv"]; // Outra forma de criar um array
        print_r($clientes)
    ?>
</body>
</html>