<?php include 'inc/header.php'; ?>
<body>
		
	
	<div id="page">
	
	<?php include 'inc/menu.php'; ?>			
	
	<div id="gtco-started" style="background-color: #b388ff  ">
		<div class="gtco-container" >
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Se liga aí</h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-12">
					<form class="form-inline" action="" method="post">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="nome" class="sr-only">Nome</label>
								<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="password" class="sr-only">senha</label>
								<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="form" class="sr-only">Formação</label>
								<input type="text" class="form-control" name="curso" id="form" placeholder="Curso de Graduação">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="insti" class="sr-only">Ensino</label>
								<input type="text" class="form-control" id="insti" name="instituicao" placeholder="Instituição de Ensino">
							</div>
						</div>

						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="cpf" class="sr-only">Cpf</label>
								<input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
							</div>
						</div>


						<div class="col-md-4 col-sm-4" style="margin-left: 370px">
							<button type="submit" name="send" class="btn btn-default btn-block"><b>CADASTRAR</b></button>
						</div>
					</form>


					</div>
			</div>
			<?php	
				if(isset($_POST['send'])){
					$caduser['nome'] = $_POST['nome'];
					$caduser['email'] = $_POST['email'];
					$caduser['senha'] = md5($_POST['senha']);
					$caduser['curso'] = $_POST['curso'];
					$caduser['instituicao'] = $_POST['instituicao'];
					$caduser['cpf'] = $_POST['cpf'];
					$caduser['nivel'] = '2';
					
					create('usuarios', $caduser);
					if(create == true){
						echo "cadastro realizado com sucesso!";
					}else{
						echo "cadastro realizado sem sucesso!";
					}
				}

			?>
		</div>
	</div>

<?php include 'inc/footer.php'; ?>