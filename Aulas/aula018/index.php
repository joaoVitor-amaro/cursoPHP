<?php 
    //Importa o script do arquivo db_connect.php para
    //o index.php
    require_once 'db_connect.php';
    //Inica a sessão
    session_start();
    //Verifica se o botão foi clicado
    if(isset($_POST['btn-entrar'])):
        $erroLogin = array();
        $login = mysqli_real_escape_string($connect, $_POST['login']);
        $senha = mysqli_real_escape_string($connect, $_POST['senha']);
        //Verifica se os campos foi preenchidos
        if(empty($login) or empty($senha)):
            $erros[] = "<li>Os campos precisam ser preenchidos</li>";
        else: 
            //Faz uma consulta aos banco de dados
            $sql = "SELECT login FROM user WHERE login='$login'";
            //Retorna um dados da consulta do banco de dados 
            $resultados = mysqli_query($connect, $sql);
            //Verfica se a quantidade de linhas de dados do banco de dados é maior que 0
            if(mysqli_num_rows($resultados) > 0):
                //Criptografa a senha
                $senha = md5($senha);
                //Consulta os dados do banco de dados com os dados dos campos de login e senha
                $sql = "SELECT * FROM user WHERE login='$login' and senha='$senha' ";
                $resultados = mysqli_query($connect, $sql);
                //Fecha a conexão com o banco de dados
                mysqli_close($connect);
                if (mysqli_num_rows($resultados) == 1):
                    //Transforma os dados que foi retornando da consulta ao banco de dados em um array
                    $dados = mysqli_fetch_array($resultados);
                    $_SESSION['logado'] = true;
                    //Cria uma sessão com o id do user cadastrado
                    $_SESSION['id_user'] = $dados['id'];
                    //Redireciona o user para a página home.php
                    header("location:home.php");
                else:
                    $erros[] = "<li>Dados não conferem</li>";
                endif;
            else:
                $erros[] = "User inexistente";
            endif;
        endif;
    endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sistema de Login</h1>
    <?php 
        if(!empty($erros)):
            foreach($erros as $erro) {
                echo $erro;
            }
        endif;
    ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="login">Login</label>
        <input type="text" name="login" id="login"><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha"><br>
        <input type="submit" name="btn-entrar" value="Entrar">
    </form>
</body>
</html>