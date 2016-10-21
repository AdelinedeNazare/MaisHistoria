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
        $query = "SELECT * FROM tb_artigos JOIN tb_assunto ON tb_artigos.tb_assunto_idassunto = tb_assunto.idassunto WHERE tb_artigos.id_artigos = $id";
        $artigo = $conn->query($query);

        if ($artigo->num_rows == 1) {
            $resultado = $artigo->fetch_assoc();
            $idProfessor = $resultado['professor_idprofessor'];
            $queryProfessor = "SELECT * FROM professor WHERE idprofessor = $idProfessor";
            $professor = $conn->query($queryProfessor)->fetch_assoc();
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
                <h2 style="color:#005858;">Artigos:</h2>
                <hr>
            </div>
            <h3 align="middle"> <b><?php echo $resultado['nome']; ?></b></h3>
            <br />
            <br />
            <br />
            <?php echo $resultado['documento']; ?>
            <h4 style="color:#005858;"> Por: <?= $professor['nome']; ?></h4>
            <h4 style="color:#005858;"> Autor(a) do artigo: <?php echo   $resultado['autor_artigo']; ?></h4>
            <br />
            <br />
            <br />
            <br />
            <?php
            include_once 'pluggin.php';
            include_once 'footer.php';
            ?>
        </div>
    </body>
</html>
