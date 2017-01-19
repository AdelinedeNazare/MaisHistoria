<?php
include_once 'connection.php';
include_once 'util.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<body>
<header>
	<?php
	include_once 'login.php';
	include_once 'homeadm.php';
	?>
</header>
<div class="container conteudo">
	<?php
	include_once 'carrosel.php';

	if (isset($_POST['enviar'])) {
		$nome = mysqli_real_escape_string($conn, $_POST['nome']);
		$descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
		$idProfessor = mysqli_real_escape_string($conn, $_SESSION['idProfessor']);
		$idAssunto = mysqli_real_escape_string($conn, $_POST['assunto']);

		$query = 'INSERT INTO tb_questoes (nomequestao, enunciado, professor_idprofessor, tb_assunto_idassunto) VALUES (?, ?, ?, ?)';

		$stmt = $conn->prepare($query);

		$stmt->bind_param('ssii', $nome, $descricao, $idProfessor, $idAssunto);

		$stmt->execute();

		if ($stmt->affected_rows > 0) {
			echo "<h2 align='center'>Questão cadastrada com sucesso</h2>";

			sendEmail("Uma nova questão cadastrada.");
		} else {
			echo "<h2 align='center'>Erro: $stmt->error</h2>";
		}
	}
	?>

    <div id="gtco-started" style="background-color: #A54812 ">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading ">
                <h2>Insira aqui sua questão:</h2>
                <hr>
            </div>
            <div class="col-sm-4 col-sm-offset-4">
                <form class="form-inline" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nome" class="col-sm-2 control-label">Nome:</label><br>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nome"
                                   placeholder="Qual o motivo da 1º Guerra Mundial?">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descricao" class="col-sm-2 control-label">Enunciado:</label><br>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="descricao"
                                   placeholder="Seu texto aqui.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="assunto" class="col-sm-2 control-label">Assunto:</label><br>
                        <div class="col-sm-8">
                            <select title="assunto" name="assunto">
								<?php showSubjects($conn); ?>
                            </select>
                        </div>
                    </div>
            </div>
            <br>
            <br>
            <div class="col-md-2 col-sm-offset-5">
                <Br>
                <button type="submit" name="enviar" class="btn btn-default btn-block"><b>Enviar Questão</b></button>
                <br>
            </div>
            <div class="col-md-4 col-sm-offset-5">
                <a href="postsgeral.php">Volte para a página anterior...</a>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>
</body>
</html>
