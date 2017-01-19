<?php

include_once 'connection.php';
//O campo usuário e senha preenchido entra no if para validar
if ((isset($_POST['email'])) && (isset($_POST['password']))) {
	$usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
	$senha = mysqli_real_escape_string($conn, $_POST['password']);
	$senha = md5($senha);

	//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
	$result_usuario = "SELECT * FROM tb_usuario WHERE usuario = '$usuario' && senha = '$senha' LIMIT 1";

	$resultado_usuario = mysqli_query($conn, $result_usuario);
	$resultado = mysqli_fetch_assoc($resultado_usuario);
	$idProfessor = $resultado['professor_idprofessor'];
	$queryProfessor = "SELECT * FROM professor WHERE idprofessor = $idProfessor";

	//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
	if ($professor = $conn->query($queryProfessor)) {
		$professor = $professor->fetch_assoc();

		$_SESSION['idusuario'] = $resultado['id_usuario'];
		$_SESSION['usuario'] = $resultado['usuario'];
		$_SESSION['nomeprofessor'] = $professor['nome'];
		$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
		$_SESSION['instituicao'] = $professor['instituicao'];
		$_SESSION['idProfessor'] = $resultado['professor_idprofessor'];

		if ($_SESSION['usuarioNiveisAcessoId'] == "1") {
			header("Location: postsgeral.php");
		} else if ($_SESSION['usuarioNiveisAcessoId'] == "2") {
			header("Location: administrativo.php");
		} else {
			header("Location: postsgeral.php");
		}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
	} else {
		//Váriavel global recebendo a mensagem de erro
		$_SESSION['loginErro'] = "Usuário ou senha Inválido";
		header("Location: index.php");
	}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
} else {
	$_SESSION['loginErro'] = "Usuário ou senha inválido";
	header("Location: index.php");
}
?>
