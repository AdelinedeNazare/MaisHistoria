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
                <h2 style="color:#005858;">Imagens:</h2>
                <hr>
            </div>
            <?php
            //$id = $_GET["id"];
            $query = "SELECT * FROM tb_imagens WHERE tb_imagens.idimagens=5 or tb_imagens.idimagens=1";
            $imagem = $conn->query($query);

            if ($imagem->num_rows) {
                $resultado = $imagem->fetch_assoc();

                $idImagem = $resultado['idimagens'];
                $nomeImagem = $resultado['nome'];
                $urlImagem = $resultado['url'];
                $descricaoImagem = $resultado['descricao'];
                echo "<font size='6' style='color:#005858;'> " . $nomeImagem;
                echo "</font>";
                echo "<br><img src=$urlImagem ";
                echo "<br><br>" . $descricaoImagem;
                echo "<br><br>";
            } else {
                header("Location: http://localhost/error.php");
                die();
            }
            if ($imagem->num_rows) {
                $resultado = $imagem->fetch_assoc();

                $idImagem = $resultado['idimagens'];
                $nomeImagem = $resultado['nome'];
                $urlImagem = $resultado['url'];
                $descricaoImagem = $resultado['descricao'];


                echo "<font size='6' style='color:#005858;'> " . $nomeImagem;
                echo "</font>";
                echo "<br><img src=$urlImagem ";
                echo "<br><br>" . $descricaoImagem;
                echo "<br><br>";
            } else {
                header("Location: http://localhost/error.php");
                die();
            }
            ?>
        </div>
            <?php
            include_once 'pluggin.php';
            include_once 'footer.php';
            ?>

    </body>
</html>
