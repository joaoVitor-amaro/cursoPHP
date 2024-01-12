<?php 
    require_once "db_connect.php";

    //Sessão
    session_start();

    if(isset($_POST['btn-editar'])):
        //Pega os dados do input
        $nomeUser = mysqli_real_escape_string($connect, $_POST['nome']);
        $sobreNomeUser = mysqli_real_escape_string($connect, $_POST['sobrenome']);
        $emailUser = mysqli_real_escape_string($connect, $_POST['email']);
        $idadeUser = mysqli_real_escape_string($connect, $_POST['idade']);
        $idUser = mysqli_real_escape_string($connect, $_POST['id']);
        //Comando sql para inserir os dados no BD
        $sqlCreat = "UPDATE clientes SET nome='$nomeUser',sobrenome='$sobreNomeUser',email='$emailUser',idade='$idadeUser' WHERE id='$idUser'";
        //Verifica se a inserção dos dados deu certo
        if(mysqli_query($connect,$sqlCreat)):
            header('location: ../index.php');
        else:
            header('location: ../index.php');
        endif;
    endif;
    
?>