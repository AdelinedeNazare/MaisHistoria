<div class="panel-heading"><a href="entre.php"> Faça seu login aqui!</a></div>
<p class="text-center text-danger">
	<?php
	if (isset($_SESSION['loginErro'])) {
		echo $_SESSION['loginErro'];
		unset($_SESSION['loginErro']);
	}
	?>
</p>
<p class="text-center text-success">
	<?php
	if (isset($_SESSION['logindeslogado'])) {
		echo $_SESSION['logindeslogado'];
		unset($_SESSION['logindeslogado']);
	}
	?>
</p>
<a href="cadastro.php"> Não possui conta? Registre-se professor</a>