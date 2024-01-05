<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Função</h1>
    <?php 
        //Função com passagem de parâmetro nome(valor)
        function exibirNome($nome) {
            echo "Meu nome é $nome";
        }
        exibirNome("João Vitor"); //Chamada da função passando um valor como parâmetro pra função
        echo "<hr>";
        //Função comm retorno
        function mediaAluno($n1, $n2) {
            return ($n1 + $n2) / 2; //RETORNA o resultado da função de forma imediata
        }
        $media = mediaAluno(5, 8);
        echo $media
    ?>
</body>
</html>