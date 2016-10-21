<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <body>
        <header>
            <?php
            include_once 'login.php';
            include_once 'menu.php';
            ?>
        </header>
        
          <div class="container conteudo">
            <?php
            include_once 'carrosel.php';
            ?>
               <div class="container marketing">
                   <h3> Bem-vindo Professor!</h3> <hr>
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="Imagens/escrevendo-carta-1024x692.jpg" alt="Generic placeholder image" width="140" height="140">
          <h3>Insira um artigo!</h3>
          <p>Aqui você professor pode inserir um artigo de sua autoria ou de outros professores. </p>
          <p><a class="btn btn-default" href="postartigo.php" role="button">Insira aqui um artigo</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="Imagens/inserindo-imagens-1-buenosites.jpg" alt="Generic placeholder image" width="140" height="140">
          <h3>Insira uma imagem</h3>
          <p>Aqui você professor pode inserir uma imagem de sua autoria ou de outros professores.  </p>
          <p><a class="btn btn-default" href="postimagem.php" role="button">Insira aqui uma imagem</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="Imagens/logo_videos.png" alt="Generic placeholder image" width="140" height="140">
          <h3>Insira um vídeo! </h3>
          <p>Aqui você professor pode inserir um vídeo de sua autoria ou de outros professores.  </p>
          <p><a class="btn btn-default" href="postvideo.php" role="button">Insira aqui um vídeo</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <div class="col-lg-4">
          <img class="img-circle" src="Imagens/shutterstock_56438875.jpg" alt="Generic placeholder image" width="140" height="140">
          <h3>Insira questões!</h3>
          <p>Aqui você professor pode inserir uma questão ou mesmo um banco de questões.  </p>
          <p><a class="btn btn-default" href="postbancoquestao.php" role="button">Insira aqui questões</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
                
              </div>
           <br />
            <br /> 
            <?php
            include_once 'footer.php';
            ?>
        </div>
    </body>
</html>