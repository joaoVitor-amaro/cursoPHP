<?php 
    require_once "db_connect.php";

    session_start();
    if(isset($_POST['btn-login'])):
        $matriculaUsuario = mysqli_real_escape_string($connect, $_POST['UserMatricula']);
        $SenhaUser = mysqli_real_escape_string($connect, $_POST['senhaUser']);

        $matriculaErro = "";
        $senhaErro = "";
        if(empty($matriculaUsuario)):
            $matriculaErro = "Preecha a matrícula";
        endif;
        if(empty($SenhaUser)):
            $senhaErro = "Preencha a senha";
        endif;

        if(empty($matriculaErro) && empty($senhaErro)):
            $sqlLogin = "SELECT * FROM user Where matricula='$matriculaUsuario'";
            $resultado = mysqli_query($connect, $sqlLogin);
            $dados = mysqli_fetch_array($resultado);
            if($dados):
                $senhaUserBD = $dados['senha'];
                if(password_verify($SenhaUser, $senhaUserBD)):
                    $_SESSION['matricula'] = $dados['matricula'];
                    header('location: ../home.php');
                else:
                    header('location: ../index.php');
                    $_SESSION['ErrorSenha'] = "Senha incorreta";
                endif;
            else:
                header("location: ../index.php");
                $_SESSION['ErrorMatricula'] = "Matrícula inexistente";
            endif;
        else:
            header("location: ../index.php");
            $_SESSION['ErrorMatricula'] = $matriculaErro;
            $_SESSION['ErrorSenha'] = $senhaErro;
        endif;
    endif;
?>