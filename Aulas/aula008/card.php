<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do procedimento</h1>
    </header>
    <section>
        <?php
          $nome = $_GET['nome'] ?? "Seu nome";
          $sobre = $_GET['sobre_nome'] ?? "Desconhecido";
          echo "$nome $sobre"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>

</body>
</html>