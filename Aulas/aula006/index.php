<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php 
        // 0b = binário; 0 = octal; 0x = hexadecimal
        $binario = 0b10; //base binário
        $octal = 010; //Base octal
        $hexadecimal = 0x1A; //Base hexadecimal

        //Verificando o tipo da variável
        $valor = (int)3e2; 
        var_dump($valor); //Função para mostrar o tipo do valor da varável

        //Conversão de tipo primitivos de float para int
        $number_decimal = 14.5;
        $number_inteiro = (int)$number_decimal; // (int) converte o tipo float para o tipo int
        echo "<p>Conversão de float para int => $number_inteiro</p>";
    ?>
</body>
</html>