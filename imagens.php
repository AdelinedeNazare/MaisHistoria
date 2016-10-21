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
        $query = "SELECT * FROM tb_imagens WHERE tb_imagens.idimagens = $id";
        $imagem = $conn->query($query);

        if ($imagem->num_rows == 1) {
            $resultado = $imagem->fetch_assoc();
            $idImagem = $resultado['idimagens'];
            $nomeImagem = $resultado['nome'];
            $urlImagem = $resultado['url'];
            $descricaoImagem = $resultado['descricao'];           
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
                <h2 style="color:#005858;">Imagens:</h2>
                <hr>
                
            </div>
            <h3> <b><?php echo $resultado['nome']; ?></b></h3>
            <br />  
            <br /> <?php echo " <img src='$urlImagem' alt='$nomeImagem' > ";?> 
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
