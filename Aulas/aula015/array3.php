<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Função array</h1>
    <?php 
        $nome = array("João", "Vitor", "Pedro", "Santos", "Barcelona");
        $carros = array("Camaro", "UNO");
        //is_array() função para verificar se a variavél é um array
        if(is_array($nome)):
            echo "É um array";
        else:
            echo "Não é um array";
        endif;
        echo "<br>";
        $name = "João";
        //Função para verificar se existe um valor no array
        if(in_array($name, $nome)) {
            echo "Existe o nome $name no array";
        } else {
            echo "Não existe o nome $name no array <br>";
        }
        echo "<br>";
        //Imprime as chaves do array
        print_r(array_keys($nome));
        echo "<br>";
        //Função para unir dois arrays
        $result = array_merge($nome, $carros);
        print_r($result);
        echo "<br>";
        //Função de remover o último elemento do array
        $exluidPop = array_pop($nome);
        print_r($nome);
        echo "<br>";
        //Função para remover o primeiro elemento do array
        $ecluiShift = array_shift($nome);
        print_r($nome);
        echo "<br>";
        //Funçaõ que adiciona 1 ou mais elementos no fim do array
        array_push($nome, "Larissa", "Peixe");
        print_r($nome);
        echo "<br>";
        //Função de adicionar 1 ou mais elemetos no ínicio do array
        array_unshift($nome, "Rio");
        print_r($nome);
        echo "<br>";
        $key = array("Campeão", "Vice");
        $values = array("Santos", "São Paulo");
        //Função que combina dois arrays, um sendo a chave e o outro os valores
        $times = array_combine($key, $values);
        print_r($times);
        echo "<br>";
        //Função de transformar um array em string
        $string = implode(", ", $nome);
        echo $string;
    ?>
</body>
</html>