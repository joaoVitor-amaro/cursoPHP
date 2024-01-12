<?php 
    //conexão
    require_once "php-action/db_connect.php";
    //Header
    include_once "includes/header.php";
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sqlSelect = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sqlSelect);
                if(mysqli_num_rows($resultado)):?>
                <?php while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?=$dados['nome']?></td>
                    <td><?=$dados['sobrenome']?></td>
                    <td><?=$dados['email']?></td>
                    <td><?=$dados['idade']?></td>
                    <td><a href="editar.php?id=<?=$dados['id']?>" class="btn-floating orange"><i class="material-icons" translate="no">edite</i></a></td>

                    <td><a href="php-action/deleteUser.php?id=<?=$dados['id']?>" class="btn-floating red"><i class="material-icons" translate="no">delete</i></td>
                </tr>
                <?php 
                endwhile; 
                else:?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                <?php endif; ?>
            </tbody><br>
        </table>
        <a href="adicionar.php" class="btn">Adicionar Cliente</a>
    </div>
</div>


<?php     
    include_once "includes/footer.php";
?>