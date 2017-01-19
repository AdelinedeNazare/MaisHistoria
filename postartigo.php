<?php
include_once 'connection.php';
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
            ?>
            <div id="gtco-started" style="background-color: #A54812 ">

                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading ">
                        <font color="#D68C2C" >
                        <h2>Insira seu artigo:</h2>
                        <hr>  
                    </div>
                </div>                              
                <div class="row animate-box">
                   <div class="col-sm-4 col-sm-offset-4">
                        <form class="form-inline" action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="arquivo" required="">
                                </div>
                            </div>
                   </div> <br>
                    <br><div class="col-md-2 col-sm-offset-5">
                        <button type="submit" name="send" class="btn btn-default btn-block"><b>Enviar Artigo</b></button> <br>
                    </div> 
                    <div class="col-md-4 col-sm-offset-5">
                        <a href="postsgeral.php" > <font color="#D68C2C" size="4"> Volte para a página anterior...</a>
                    </div>
                </div>
            </div>
        </div> <br>
        <?php
        if(!isset($_SESSION['usuario'])){
	        	header("Location: naologado.php");
	        }else{
			$msg = false;
			$iduser = $_SESSION['usuario'];
			if(isset($_FILES['arquivo'])){
				$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
				$arq['nome'] = acents($_FILES['arquivo']['nome']);
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
						$mail->Username = 'adelinedenazare@gmail.com';
						 
						// Senha da conta
						$mail->Password = 'camon2013';
						 
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
						$mail->Body = '<h1>http://'.$urlEndereco.'/maishistoria/uploads/'.str_replace(' ', '%20', $arq['nome']).'</h1>';
						 
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
          
<?php
include_once 'footer.php';
?> 
    </body>
</html>