<?php include 'inc/header.php'; ?>
<body>
		
	
	<div id="page">
	
	<?php include 'inc/menu.php'; ?>

	<div id="gtco-started" style="background-color: #b388ff  ">
		<div class="gtco-container" >
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Submeter Artigos</h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-12">
					<form class="form-inline" action="" method="post" enctype="multipart/form-data">
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<input type="file" class="form-control" name="arquivo" required="">
							</div>
						</div>
						</div>
						<div class="col-md-4 col-sm-4 pull-right">
							<button type="submit" name="send" class="btn btn-default btn-block"><b>Enviar Artigo</b></button>
						</div>
					</form>
					</div>
			</div>
		</div>
		<?php
			if(!isset($_SESSION['userlogin'])){
	        	header("Location: login.php");
	        }else{
			$msg = false;
			$iduser = $_SESSION['userlogin']['idusuarios'];
			if(isset($_FILES['arquivo'])){
				$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
				$arq['nome'] = acents($_FILES['arquivo']['name']);
				$arq['tipo'] = $extensao;
				$arq['aprovado'] = 0;
				$arq['datacad'] = date('Y-m-d H:i:s');
				$arq['iduser'] = $iduser;
				$dir = 'uploads/';

				move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$arq['nome']);

				create('arquivo', $arq);

				if (create == false) {
					echo "sem sucesso";
				}else{
					echo "sucesso";
					// Caminho da biblioteca PHPMailer
						require 'PHPMailer/PHPMailerAutoload.php';
						 
						// Instância do objeto PHPMailer
						$mail = new PHPMailer;
						 
						// Configura para envio de e-mails usando SMTP
						$mail->isSMTP();
						 
						// Servidor SMTP
						$mail->Host = 'smtp.gmail.com';
						 
						// Usar autenticação SMTP
						$mail->SMTPAuth = true;
						 
						// Usuário da conta
						$mail->Username = 'jhonatasousa58@gmail.com';
						 
						// Senha da conta
						$mail->Password = 'jhonata14';
						 
						// Tipo de encriptação que será usado na conexão SMTP
						$mail->SMTPSecure = 'ssl';
						 
						// Porta do servidor SMTP
						$mail->Port = 465;
						 
						// Informa se vamos enviar mensagens usando HTML
						$mail->IsHTML(true);
						 
						// Email do Remetente
						$mail->From = $_SESSION['userlogin']['email'];
						 
						// Nome do Remetente
						$mail->FromName = $_SESSION['userlogin']['nome'];
						 
						// Endereço do e-mail do destinatário
						$mail->addAddress('jhonatasousa58@gmail.com');
						 
						// Assunto do e-mail
						$mail->Subject = 'Novo Artigo Submetido';
						 
						// Mensagem que vai no corpo do e-mail
						$mail->Body = '<h1>http://'.$urlEndereco.'/oxygen/uploads/'.str_replace(' ', '%20', $arq['nome']).'</h1>';
						 
						// Envia o e-mail e captura o sucesso ou erro
						if($mail->Send()):
						    echo 'Enviado com sucesso !';
						else:
						    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
						endif;
				}
			}
		}
		?>
	</div>

<?php include 'inc/footer.php'; ?>