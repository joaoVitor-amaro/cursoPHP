<?php 
    
    //Header
    include_once "includes/header.php";
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo cliente</h3>
        <form action="php-action/creat.php" method="post">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label> 
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label> 
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label> 
            </div>
            <div class="input-field col s12">
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label> 
            </div>
            <input type="submit" class="btn" name="btn-cadastrar" value="Cadastrar">
            <a href="index.php" class="btn green">Listar Clientes</a>
        </form>
    </div>
</div>


<?php     
    include_once "includes/footer.php";
?>