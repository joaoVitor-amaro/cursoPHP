<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores aritméticos</h1>
    <?php  
        //PHP realiza a soma entre as strings, porque o operador de adição não é um operador de concatenção
        //Converte para o type number e realiza a operação
        $sm = '25' . '2'; 
        echo "$sm<br>";

        //Erro por somar duas strings sem números, pois a soma só ocorre em caso a string tenha só números
        // $sm2 = "João" + "vitor"; 
        // echo $sm2

        //Operador de potênciação
        $potencia = 5**2;
        echo "A potênciação de 5 elevado a 2 é igual a $potencia<br>";

        //Operador de divisão real
        $divi = 8 / 4;
        echo "8 dividido por 4 é igual a $divi<br>";

        //Operado de resto da divião
        $restoDiv = 8 % 3;
        echo "O resto da divisão 8 por 3 é igual a $restoDiv<br>";

        //Operador de multiplicação
        $multi = 3 * 5;
        echo "A multiplicação entre 3 e 5 é igual a $multi"
    ?>
</body>
</html>