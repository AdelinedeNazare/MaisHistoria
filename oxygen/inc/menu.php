<?php
$nome = 'Ade';
	if(isset($_SESSION['userlogin'])){
        	echo '<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-xs-2">
					<div id="gtco-logo" style="margin-left: -60px; width: 500px; margin-top: -7px"><a href="index.html">Ligação química.</a></div>
				</div>
				<div class="col-xs-8 text-center menu-1">
					<ul>
						<li class="active"><a href="index.php" style="font-size: 15px; color: white""><b>Home</b></a></li>
						<li><a href="about.php" style="font-size: 15px; color: white"><b>Conteúdos</b></a></li>
						<li><a href="services.php" style="font-size: 15px; color: white""><b>Notícias</b></a></li>
						<li><a href="contact.php" style="font-size: 15px; color: white""><b>Curiosidades</b></a></li>
						<li class="has-dropdown">
							<a href="#" style="font-size: 15px; color: white"><b>Artigos</b></a>
							<ul class="dropdown" style="width: 200px">
							<li><a href="listarartigos.php" style="font-size: 15px"><b>LISTA DE ARTIGOS SUBMETIDOS</b></a></li>
								<li><a href="acessarartigos.php" style="font-size: 15px"><b>ACESSAR ARTIGOS</b></a></li>
								<li><a href="submeterartigos.php" style="font-size: 15px"><b>SUBMETER ARTIGOS</b></a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-xs-2 text-right hidden-xs menu-2">
					<ul>
						<li class="btn-cta"><a href="login.php?logout=true" style="color: #1e316d;"><span><b>Logout</b></span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>';
        }
        else if(!isset($_SESSION['userlogin'])){
        	echo '<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-xs-2">
					<div id="gtco-logo" style="margin-left: -60px; width: 500px; margin-top: -7px"><a href="index.html">Ligação química.</a></div>
				</div>
				<div class="col-xs-8 text-center menu-1">
					<ul>
						<li class="active"><a href="index.php" style="font-size: 15px; color: white""><b>Home</b></a></li>
						<li><a href="about.php" style="font-size: 15px; color: white"><b>Conteúdos</b></a></li>
						<li><a href="services.php" style="font-size: 15px; color: white""><b>Notícias</b></a></li>
						<li><a href="contact.php" style="font-size: 15px; color: white""><b>Curiosidades</b></a></li>
						<li class="has-dropdown">
							<a href="#" style="font-size: 15px; color: white"><b>Artigos</b></a>
							<ul class="dropdown" style="width: 200px">
								<li><a href="acessarartigos.php" style="font-size: 15px"><b>ACESSAR ARTIGOS</b></a></li>
								<li><a href="login.php" style="font-size: 15px"><b>SUBMETER ARTIGOS</b></a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-xs-2 text-right hidden-xs menu-2">
					<ul>
						<li class="btn-cta"><a href="login.php" style="color: #1e316d;"><span><b>Login</b></span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>';
        }
?>