<?php 
    //Ecncerrando a sessão
    session_start(); 
    session_unset();//limpa os dados da sessão
    session_destroy(); //Destrói os dados da sessão
    header('location:index.php')//Redericiona para a página index.php
?>