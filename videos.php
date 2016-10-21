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
        <?php
        $id = $_GET["id"];
        $queryVideo = "SELECT * FROM tb_videos WHERE tb_videos.idVideos = $id";
        $videos = $conn->query($queryVideo);

        if ($videos->num_rows == 1) {
            $resultado = $videos->fetch_assoc();
            $nomevideo=$resultado['nomevideo'];
            $urlvideos = $resultado['url'];
            $descricaovideo = $resultado['descricao'];           
        } 
        else {
            header("Location: http://localhost/error.php");
            die();
        }
        ?>
        <div class="container conteudo">
            <?php
            include_once 'carrosel.php';
            ?>
            <div class="row destaque">
                <h2 style="color:#005858;">Vídeos:</h2>
                <hr>   
            </div>    
             <h3> <b><?php echo $resultado['nomevideo']; ?></b></h3>
            <br />  
            <br /> <?php echo "<p><iframe src='$urlvideos' frameborder='0' allowfullscreen></iframe></a>" ;?> 
            <br /> <?php echo $resultado['descricao']; ?> 
            <br />
            <br /> 
            <?php
            include_once 'pluggin.php';
            include_once 'footer.php';
            ?>
        </div>
    </body>
</html>
