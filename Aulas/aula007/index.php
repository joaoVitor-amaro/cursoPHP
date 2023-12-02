<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        const estado = "PB";
        $number = 5;
        $nome = "João";
        $apelido = "Vitin";
        $sobre_nome = "Vitor";
        
        //Aspas dupla interpreta o conteúdo da string e exibe o valor da variável
        echo "<p>Olá, $nome";


        //Aspas simples não interprata a string e não exibe o valor da variável, precisa do auxilio do operador de concatenação
        echo '<p>O número é $number \u{1F418}</p>';
        echo '<p>O número é '.$number. '</p>';//Utiliza o operador de concatenação(.)


        //As constante só pode ser concatenada com o operador de concatenação(.)
        echo "<p>Moro no estado</p>";
        echo "<p>Moro na ".estado."</p>";


        //erro semântico
        echo '<p>$nome "Minotauro" $sobre_nome';


        //Tipos de sequência de escape

        //Escape de aspas dupla
        echo "<p>$nome \"$apelido\" $sobre_nome</p>";

        //Escape de tabulação, porém, não funciona no html
        echo "<p>$nome \t\t \"$apelido\" $sobre_nome</p>"
    ?>
</body>
</html>