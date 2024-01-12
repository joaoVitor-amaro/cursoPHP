<?php 
    require_once "db_connect.php";

    //Sessão
    session_start();

    //Função de limpar script do input
    function clear($input){
        global $connect;
        //sql
        $var = mysqli_real_escape_string($connect, $input);
        //xss
        $var = htmlspecialchars($var);
        return $var;
    }

    if(isset($_POST['btn-cadastrar'])):
        //Pega os dados do input
        $nomeUser = clear( $_POST['nome']);
        $sobreNomeUser = clear( $_POST['sobrenome']);
        $emailUser = clear( $_POST['email']);
        $idadeUser = clear($_POST['idade']);
        //Comando sql para inserir os dados no BD
        $sqlCreat = "INSERT INTO clientes (nome, sobrenome, email, idade) values ('$nomeUser','$sobreNomeUser','$emailUser','$idadeUser')";
        //Verifica se a inserção dos dados deu certo
        if(mysqli_query($connect,$sqlCreat)):
            header('location: ../index.php');
        else:
            header('location: ../index.php');
        endif;
    endif;
    
?>