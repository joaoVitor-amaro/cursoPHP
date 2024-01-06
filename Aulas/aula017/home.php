<?php 
    session_start(); //Inicia a sessão
    //Exibe os dados da sessão que foi criada na página index.php
    echo $_SESSION['cor']."<br>".$_SESSION['carro'];
    
?>