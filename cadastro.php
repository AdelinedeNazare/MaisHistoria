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
                    <label for="cpf" class="col-sm-2 control-label">CPF:</label>
                    <div class="col-sm-8">
                        <input type="tel" class="form-control" name="cpf" placeholder="12345678909" size="11">

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
                        <input type="date" class="form-control" name="data" placeholder="25/11/0000">
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
                    <label for="endereco" class="col-sm-2 control-label">Endereço:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="endereco" placeholder="Avenida Tocantins, S/N">
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
                $queryProfessor = 'INSERT INTO professor (nome, cpf, telefone, email, instituicao, endereco, data_nascimento) VALUES (?, ?, ?, ?, ?, ?, ?)';
                $stmtProfessor = $conn->prepare($queryProfessor);
                $dataNascimento = join('-', array_reverse(preg_split('/\//', $_POST['data'])));
                $stmtProfessor->bind_param('sssssss', $_POST['nome'], $_POST['cpf'], $_POST['telefone'], $_POST['email'],
                    $_POST['instituicao'], $_POST['endereco'], $dataNascimento);
                $stmtProfessor->execute();

                $queryUser = 'INSERT INTO tb_usuario (usuario, senha, professor_idprofessor, ativo, niveis_acesso_id) VALUES (?, ?, ?, ?, ?)';
                $stmtUser = $conn->prepare($queryUser);
                $senha = md5($_POST['senha']);
                $id = $stmtProfessor->insert_id;
                $isAtivo = true;
                $nivelAcesso = 3;

                $stmtUser->bind_param('ssiii', $_POST['email'], $senha, $id, $isAtivo, $nivelAcesso);

                if ($stmtUser->execute()) {
                    echo "<h2 align='center'>cadastro realizado com sucesso!</h2>";
                } else {
                    echo "<h2 align='center'>cadastro realizado sem sucesso!</h2>";
                }


            }
            ?>
        </div>
        <?php
        include_once 'footer.php';
        ?>

    </body>
</html>
