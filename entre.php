<!DOCTYPE html>
<html lang="pt-br">
<?php
include_once 'carrosel.php';
?>
<body>
<div id="cabecalho" class="container">
    <form action="valida.php" class="form-login" method="POST">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-success">
                <div class="panel-heading"> Faça seu login aqui!</div>
                <div class="form-group-sm">
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="email"
                           required autofocus>
                </div>
                <div class="form-group-sm">
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                           placeholder="senha" required>
                </div>
                <button type="submit" class="btn btn-default btn-sm">Entrar</button>

                <div class="panel-body">
					<?php
					if (!empty($_SESSION['usuario'])) {
						include 'logado.php';
					} else {
						include 'naologado.php';
					}
					?>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include_once 'footer.php';
?>
</body>

</html>
