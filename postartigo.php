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
		uploadFile($conn, 'tb_artigos', 'nome', 'imagem');
	}
	?>

    <div id="gtco-started" style="background-color: #A54812 ">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading ">
                <h2>Insira aqui seu artigo:</h2>
                <hr>
            </div>
            <div class="col-sm-4 col-sm-offset-4">
                <form class="form-inline" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nome" class="col-sm-2 control-label">Nome:</label> <br>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nome" placeholder="História no Brasil do Brasil?">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descricao" class="col-sm-3 control-label">Descrição:</label><br>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="descricao"      placeholder="Seu texto aqui.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="assunto" class="col-sm-1 control-label">Assunto:</label><br>
                        <div class="col-sm-8">
                            <select title="assunto" name="assunto">
							<br>	<?php showSubjects($conn); ?>
                            </select>
                        </div>
                    </div>
                    <br>  <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <br> <input type="file" class="form-control" name="arquivo" required="">
                        </div>
                    </div>
            </div>
            <br>
            <br>
            <div class="col-md-2 col-sm-offset-5">
                <Br>
                <button type="submit" name="enviar" class="btn btn-default btn-block"><b>Enviar Artigo</b></button>
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
