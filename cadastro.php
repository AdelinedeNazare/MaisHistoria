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
        
            <h1>Cadastro de usuário</h1>
            <form class="form-horizontal" action="">
                
                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Nome:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nome" placeholder="Juliano Palmeiras">
                    </div>
                </div>
                <div class="form-group">
                    <label for="usuario" class="col-sm-2 control-label">Usuário:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="usuario" placeholder="maishistoria@gmail.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="senha" class="col-sm-2 control-label">Senha:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="senha">
                    </div>
                </div>
                <div class="form-group">
                    <label for="data" class="col-sm-2 control-label">Data de Nascimento:</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="data">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefone" class="col-sm-2 control-label">Telefone:</label>
                    <div class="col-sm-8">
                        <input type="tel" class="form-control" id="cpf" placeholder="(00) 00000-0000">
                        
                    </div>
                </div>
                    <div class="form-group">
                    <label for="instituicao" class="col-sm-2 control-label">Instituição de Atuação:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="instituicao" placeholder="IFTO- Campus Araguaína">
                    </div>
                </div>    
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" class="btn btn-default">Cadastrar</button>
                    </div>
                </div>
            </form>

        </div>
        <?php
        include_once 'footer.php';
        ?>

    </body>
</html>
