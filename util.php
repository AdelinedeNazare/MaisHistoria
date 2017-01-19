<?php
require_once 'oxygen/inc/functions.php';
require 'PHPMailer/PHPMailerAutoload.php';

/**
 * Try upload a file and save it to a related table at MySQL.
 *
 * @param mysqli $conn
 * @param string $table
 * @param string $name
 * @param string $urlField
 * @param bool $email
 */
function uploadFile($conn, $table = 'tb_videos', $name = 'nomevideo', $urlField = 'url', $email = true)
{
	$video = $_FILES['arquivo'];
	$pasta = 'uploads/';
	$arquivoTemporario = $video['tmp_name'];
	$arquivo = acents($video['name']);
	$url = $pasta . $arquivo;

	if (!file_exists($pasta)) {
		mkdir($pasta);
	}

	move_uploaded_file($arquivoTemporario, $url);

	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
	$idProfessor = mysqli_real_escape_string($conn, $_SESSION['idProfessor']);
	$idAssunto = mysqli_real_escape_string($conn, $_POST['assunto']);

	if ($table === 'tb_artigos') {
		$autor = mysqli_real_escape_string($conn, $_SESSION['nomeprofessor']);

		$query = " <br>INSERT INTO $table ($name, documento, $urlField, autor_artigo, professor_idprofessor,"
			. ' tb_assunto_idassunto) VALUES (?, ?, ?, ?, ?, ?) <br><br>';

		$stmt = $conn->prepare($query);

		$stmt->bind_param('ssssii', $nome, $descricao, $url, $autor, $idProfessor, $idAssunto);
	} else {
		$query = "INSERT INTO $table ($name, descricao, $urlField, professor_idprofessor, tb_assunto_idassunto) " .
			'VALUES (?, ?, ?, ?, ?)';

		$stmt = $conn->prepare($query);

		$stmt->bind_param('sssii', $nome, $descricao, $url, $idProfessor, $idAssunto);
	}

	$stmt->execute();

	if ($stmt->affected_rows > 0) {
		echo "<h2 align='center'>Cadastrado com sucesso</h2>";

		if ($email) {
			sendEmail("Um novo cadastro na tabela $table.");
		}
	} else {
		echo "<h2 align='center'>Erro: $stmt->error</h2>";
	}
}

function sendEmail($body)
{
	$mail = new PHPMailer;

	$mail->Body = $body;
	$mail->From = $_SESSION['usuario'];
	$mail->FromName = $_SESSION['nomeprofessor'];
	$mail->Host = 'smtp.gmail.com';
	$mail->Password = 'camon2013';
	$mail->Port = 465;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Subject = 'Novo Artigo Submetido';
	$mail->Username = 'adelinedenazare@gmail.com';

	$mail->addAddress('adelinedenazare@gmail.com');
	$mail->IsHTML(true);
	$mail->isSMTP();

	return $mail->Send();
}

/**
 * Show at <select> tag all subjects saved from DB.
 * @param mysqli $conn
 */
function showSubjects($conn)
{
	if ($assuntos = $conn->query('SELECT * FROM tb_assunto')) {
		while ($assunto = $assuntos->fetch_assoc()) {
			echo"<br><br>";$value = $assunto['idassunto']; echo"<br><br>";
			echo"<br><br>";$display = $assunto['nomeassunto'] . ', ' . $assunto['tipo'];echo"<br><br>";

			echo "<br><option value='$value'>$display</option>";
		}
	}
}