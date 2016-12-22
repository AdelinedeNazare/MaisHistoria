<?php
include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

    <body>

        <header>
            <?php
            include_once 'login.php';
            include_once 'menu.php';
            ?>
        </header>
        <div class="container conteudo">
            <?php
            include_once 'carrosel.php';
            ?>

            <center> <h1>Cadastro de usuário</h1> </center>
            <form class="form-horizontal" action="" method="post">

                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Nome:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nome" placeholder="Juliano Palmeiras">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" placeholder="maishistoria@gmail.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="senha" class="col-sm-2 control-label">Senha:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="senha">
                    </div>
                </div>
                <div class="form-group">
                    <label for="data" class="col-sm-2 control-label">Data de Nascimento:</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="data">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefone" class="col-sm-2 control-label">Telefone:</label>
                    <div class="col-sm-8">
                        <input type="tel" class="form-control" name="telefone" placeholder="(00) 00000-0000">

                    </div>
                </div>
                <div class="form-group">
                    <label for="instituicao" class="col-sm-2 control-label">Instituição de Atuação:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="instituicao" placeholder="IFTO- Campus Araguaína">
                    </div>
                </div>    
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" name="enviar" class="btn btn-default">Cadastrar</button>
                    </div>
                </div>
            </form>
            <?php
            if (isset($_POST['enviar'])) {

                create('professor', 'tb_usuario', $caduser);
                if (create == true) {
                    echo "cadastro realizado com sucesso!";
                } else {
                    echo "cadastro realizado sem sucesso!";
                }
            }
            ?>
        </div>
        <?php
        include_once 'footer.php';
        ?>

    </body>
</html>
