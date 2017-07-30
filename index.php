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
            <div class="row destaque">
                <h2 style="color:#005858;">Destaques</h2>
                <hr>    
                <div class="col-lg-4">
                    <h3>Artigos</h3>
                    <ul>
                        <?php
                        $query = "SELECT * FROM tb_artigos JOIN tb_assunto ON tb_artigos.tb_assunto_idassunto = tb_assunto.idassunto ORDER BY tb_artigos.id_artigos DESC LIMIT 5";
                        $artigos = $conn->query($query);

                        if ($artigos->num_rows > 0) {
                            while ($artigo = $artigos->fetch_assoc()) {
                                $idArtigo = $artigo['id_artigos'];
                                $nomeArtigo = $artigo['nome'];
                                echo "<li><a href='artigomostrar.php?id=$idArtigo'>$nomeArtigo</a></li>";
                            }
                        } else {
                            echo "<li>Não há artigos cadastrados, ainda!</li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3>Imagens</h3>
                    <?php
                    $queryImage = "SELECT * FROM tb_imagens ORDER BY tb_imagens.idimagens DESC LIMIT 5";
                    $imagens = $conn->query($queryImage);

                    if ($imagens->num_rows > 0) {
                        while ($artigo = $imagens->fetch_assoc()) {
                            $idImagem = $artigo['idimagens'];
                            $nomeImagem = $artigo['nome'];
                            $urlImagem = $artigo['url'];
                            echo "<p><li><a href='imagens.php?id=$idImagem'><img src='$urlImagem' alt='$nomeImagem' class='img-destaque'>$nomeImagem<br><br></a></li>";
                        }
                    } else {
                        echo "<p>Não há imagens cadastrados, ainda!</p>";
                    }
                    ?>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <h3>Vídeos</h3>
                    <?php
                    $queryVideo = "SELECT * FROM tb_videos ORDER BY tb_videos.idVideos DESC LIMIT 5";
                    $videos = $conn->query($queryVideo);

                    if ($videos->num_rows > 0) {
                        while ($video = $videos->fetch_assoc()) {
                            $idvideo = $video['idVideos'];
                            $urlvideo = $video['url'];
                            echo "<p><li><a href='videos.php?id=$idvideo'><iframe src='$urlvideo' frameborder='0' allowfullscreen></iframe></a></li>";
                        }
                    }                    
                    else {
                        echo "<p>Não há vídeos cadastrados, ainda!</p>";
                    }
                    ?>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <h3>Banco de Questões</h3>
                    <?php
                    $queryquestao = "SELECT * FROM tb_questoes ORDER BY tb_questoes.idquestoes DESC LIMIT 5";
                    $questao = $conn->query($queryquestao);

                    if ($questao->num_rows > 0) {
                        while ($questões = $questao->fetch_assoc()) {
                            $idquestao = $questões['idquestoes'];
                            $nomequestao = $questões['nomequestao'];
                            echo "<p><li><a href='bancodequestoes.php?id=$idquestao'>$nomequestao</a></li>";
                        }
                    } else {
                        echo "<p>Não há questões cadastrados, ainda!</p>";
                    }
                    ?>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
<?php
include_once 'footer.php';
?>
    </body>
</html>
