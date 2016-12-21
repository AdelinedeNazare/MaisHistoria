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
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control" name="senha" id="password" placeholder="Password">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<button type="submit" name="send" class="btn btn-default btn-block"><b>ENTRAR</b></button>
						</div>
					</form>
					</div>
			</div>
			<p>
                    <center><span style="color: white">Não possui conta? </span><a href="cadastrodeusuario.php" style="color:#1e316d; "><b> Cadastre-se</b></a></h5></center></p>
		</div>
		<?php

		if(isset($_POST['send'])){
		$user = mysql_real_escape_string($_POST['email']);
        $password = mysql_real_escape_string(md5($_POST['senha']));
        
	        if(!$user || !$password){
	            echo 'erroempty';
	        }else{
	            $readuser = read('usuarios',"WHERE email = '$user' AND senha = '$password'");
	            if($readuser):
	                foreach ($readuser as $userlogin);
	                $_SESSION['userlogin'] = $userlogin;
	                echo 'success';
	            else:
	                echo 'errosenha';
	            endif;
	        }
	    }
		
		if($_GET['logout']){
        	unset($_SESSION['userlogin']);
        	header("Location: index.php");
        }
        
        if(isset($_SESSION['userlogin'])){
        	header("Location: submeterartigos.php");
        }

		?>
	</div>

<?php include 'inc/footer.php'; ?>