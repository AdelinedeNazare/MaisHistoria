<?php include 'inc/header.php'; ?>
<body>
		
	
	<div id="page">
	
	<?php include 'inc/menu.php'; ?>

	<div id="gtco-started" style="background-color: #b388ff  ">
		<div class="gtco-container" >
			<div class="row animate-box">
			<?php 
				if(!isset($_SESSION['userlogin'])){
					header("Location: login.php");
				}else{

					if(isset($_POST['send'])){
						$arqid = mysql_real_escape_string($_GET['id']);
    					$readarqs = read('arquivo',"WHERE idarquivo = '$arqid'");

    					foreach ($readarqs as $arq):endforeach;
    					$arq['aprovado'] = 1;

    					update('arquivo', $arq, "idarquivo = '$arqid'");

    					if(update == true){
				            echo '<div class="panel panel-default"><div class="list-group-item bg">Artigo Aprovado!</div></div>';
				        }else{
				            echo '<div class="panel panel-default"><div class="list-group-item bg2">Ocorreu um erro ao aprovar o artigo!</div></div>';  }
					}


					if($_SESSION['userlogin']['nivel'] == 2){
					$iduser = $_SESSION['userlogin']['idusuarios'];
					$readart = read('arquivo', "WHERE iduser = '$iduser'");
					echo '<table border="1" class="table table-striped">
								  <thead>
								    <tr>
								      <th class="info" col-md-1>#ID</th>
								      <th class="info" col-md-8>Nome do Artigo</th>
								      <th class="info" col-md-1>data de Cadastro</th>
								      <th class="info" col-md-1>Estado</th>
								    </tr>
								  </thead>';
					
					foreach ($readart as $artigo) {
						$aproved = $artigo['aprovado'];
						if($aproved == 0){
							$aproved = 'Aguardando Aprovação';
						}else{
							$aproved = 'Aprovado';
						}
						$data = date('d-m-Y H:i:s',strtotime($artigo['datacad']));
						echo '<tbody>
								    <tr>
								      <td>'.$artigo['idarquivo'].'</td>
								      <td><a style="color: #000;" href="http://'.$urlEndereco.'/oxygen/uploads/'.str_replace(' ', '%20', $artigo['nome']).'">'.$artigo['nome'].'</a></td>
								      <td>'.$data.'</td>
								      <td>'.$aproved.'</td>
								    </tr>
								  </tbody>';
					}
					echo '</table>';
				}else{
					$readart = read('arquivo', "WHERE aprovado = '0'");
					if(!$readart){
						echo "";
					}else{
					echo '<table border="1" class="table table-striped">
								  <thead>
								    <tr>
								      <th class="info" col-md-1>#ID</th>
								      <th class="info" col-md-8>Nome do Artigo</th>
								      <th class="info" col-md-1>data de Cadastro</th>
								      <th class="info" col-md-1>Estado</th>
								    </tr>
								  </thead>';
					
					foreach ($readart as $artigo) {
						$aproved = $artigo['aprovado'];
						$data = date('d-m-Y H:i:s',strtotime($artigo['datacad']));
						echo '<tbody>
								    <tr>
								      <td>'.$artigo['idarquivo'].'</td>
								      <td><a style="color: #000;" href="http://'.$urlEndereco.'/oxygen/uploads/'.str_replace(' ', '%20', $artigo['nome']).'">'.$artigo['nome'].'</a></td>
								      <td>'.$data.'</td>
								      <td><form action="listarartigos.php?id='.$artigo['idarquivo'].'" method="post"><a href="listarartigos.php?id='.$artigo['idarquivo'].'"><button class="btn-success" name="send">Aprovar</button></a></form></td>
								    </tr>
								  </tbody>';
					}
				}
					echo '</table>';

					$readart = read('arquivo', "WHERE aprovado = '1'");
					if(!$readart){
						echo "";
					}else{
					echo '<h1 style="color: #fff;"><b>Aprovados</b></h1><table border="1" class="table table-striped">
								  <thead>
								    <tr>
								      <th class="info" col-md-1>#ID</th>
								      <th class="info" col-md-8>Nome do Artigo</th>
								      <th class="info" col-md-1>data de Cadastro</th>
								      <th class="info" col-md-1>Estado</th>
								    </tr>
								  </thead>';
					
					foreach ($readart as $artigo) {
						$aproved = $artigo['aprovado'];
						if($aproved == 0){
							$aproved = 'Aguardando Aprovação';
						}else{
							$aproved = 'Aprovado';
						}
						$data = date('d-m-Y H:i:s',strtotime($artigo['datacad']));
						echo '<tbody>
								    <tr>
								      <td>'.$artigo['idarquivo'].'</td>
								      <td><a style="color: #000;" href="http://'.$urlEndereco.'/oxygen/uploads/'.str_replace(' ', '%20', $artigo['nome']).'">'.$artigo['nome'].'</a></td>
								      <td>'.$data.'</td>
								      <td>'.$aproved.'</td>
								    </tr>
								  </tbody>';
					}
					echo '</table>';
				}
				}
			}
			?>
			</div>
		</div>
	</div>

<?php include 'inc/footer.php'; ?>