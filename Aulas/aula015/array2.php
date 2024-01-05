<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $carro = array("BMW", "Veloster","Hilux");
        print_r($carro);
        //Count é uma função para saber a quantidade de valores no array
        echo "O array possui ". count($carro)." Valores";   
        echo "<hr>";
        //Objetos/array multidimensionais
        //Os valores são acessados através da chave/índice
        $times = array(
            "Paulistas"=>array("Santos", "Palmeira", "São Paulo"),
            "cariocas"=>array("Flamengo", "Vasco", "Botafogo")
        );
        print_r($times);
        echo "<br>";
        //Percorre os valores do objeto da chave Paulistas
        foreach($times['Paulistas'] as $indice => $valor) {
            echo $indice." : ".$valor."<br>" ; 
        };
        
    ?>
</body>
</html>