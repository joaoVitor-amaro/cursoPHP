<?php 
    //conexão 
    require_once "php-action/db_connect.php";
    //Header
    include_once "includes/header.php";
    if(isset($_GET['id'])):
        $id = mysqli_real_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM clientes WHERE id ='$id' ";
        $resultados = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultados);
    endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar cliente</h3>
        <form action="php-action/update.php" method="post">
            <input type="hidden" name="id" value="<?=$dados['id']?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?=$dados['nome']?>">
                <label for="nome">Nome</label> 
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value="<?=$dados['sobrenome']?>">
                <label for="sobrenome">Sobrenome</label> 
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?=$dados['email']?>">
                <label for="email">Email</label> 
            </div>
            <div class="input-field col s12">
                <input type="text" name="idade" id="idade" value="<?=$dados['idade']?>">
                <label for="idade">Idade</label> 
            </div>
            <input type="submit" class="btn" name="btn-editar" value="Atualizar">
            <a href="index.php" class="btn green">Listar Clientes</a>
        </form>
    </div>
</div>


<?php     
    include_once "includes/footer.php";
?>