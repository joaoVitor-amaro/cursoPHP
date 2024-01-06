<?php 
    session_start(); //Inicia a sessão
    //Cria dos dados da sessão
    $_SESSION['cor'] = "Verde";
    $_SESSION['carro'] = "Camaro";
    //Exibe os dados da sessão
    echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();
?>