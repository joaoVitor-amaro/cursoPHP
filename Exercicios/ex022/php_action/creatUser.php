<?php 
    require_once "db_connect.php";
    
    if(isset($_POST['btn-cadaster'])):
        $matriculaUser = mysqli_real_escape_string($connect, $_POST['matriculaUser']);
        $userName = mysqli_real_escape_string($connect, $_POST['nameUser']);
        $userEmail = mysqli_real_escape_string($connect, $_POST['emailUser']);
        $idadeUser = mysqli_real_escape_string($connect, $_POST['idadeUser']);
        $userPwd = mysqli_real_escape_string($connect, $_POST['pwdUser']);
        $sqlSelect = "SELECT matricula FROM user WHERE matricula='$matriculaUser'";
        $resultado = mysqli_query($connect, $sqlSelect);
        if(mysqli_num_rows($resultado) > 0):
            echo "Não cadastrado";
        else:
            $userPwd = password_hash($userPwd, PASSWORD_DEFAULT);
            $sqlCreat = "INSERT INTO user (matricula, nome, email, idade, senha) values ('$matriculaUser', '$userName', '$userEmail', '$idadeUser', '$userPwd')"; 
            if (mysqli_query($connect, $sqlCreat)):
                header('location: ../index.php?sucesso');
            endif;
        endif;
        mysqli_close($connect);
    endif;
?>