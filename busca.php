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
        <h2 style="color:#005858;">Resultado da sua busca:</h2>
        <hr>

        <?php
        // Processa busca
        $text = '%'.$_POST['search-text'].'%';

        $query = "SELECT id_artigos as id, nome, documento as descricao, 'artigo' as tabela FROM tb_artigos WHERE nome LIKE ? OR documento LIKE ? 
        UNION ALL 
        SELECT idVideos as id, nomevideo as nome, descricao, 'videos' as tabela FROM tb_videos WHERE nomevideo LIKE ? OR descricao LIKE ? 
        UNION ALL 
        SELECT idimagens as id, nome, descricao, 'imagens' as tabela FROM tb_imagens WHERE nome LIKE ? OR descricao LIKE ?";
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param('ssssss', $text, $text, $text, $text, $text, $text);
            $stmt->execute();

            if ($searchResult = $stmt->get_result()) {
                $stmt->fetch();

                foreach ($searchResult as $row) {
                    ?>
                    <p>
                        <a href="<?php echo $row['tabela'].'.php?id='.$row['id'] ?>"><?php echo $row['nome'] ?></a><br>
                        <i><?php echo $row['descricao']?></i>
                    </p>
                    <?php
                }
            }

            if ($searchResult->num_rows < 1) {
                echo '<h3>Nenhum resultado encontrado!</h3>';
            }

            $stmt->close();
        } else {
            echo 'asdalsdjas';
        }
        ?>
    </div>

    <?php
    include_once 'footer.php';
    ?>
</div>
</body>
</html>
