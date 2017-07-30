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
                <h2 style="color:#005858;">Artigos:</h2>
                <hr>
            </div>
            <?php
            $query = "SELECT * FROM tb_artigos JOIN tb_assunto ON tb_artigos.tb_assunto_idassunto = tb_assunto.idassunto;";
            $artigo = $conn->query($query);

            if ($artigo->num_rows) {
                $tabela = '<table border="1" class="table table-striped">';
                $tabela .= '<thead>';
                $tabela .= '<tr> ';
                $tabela .= '<th class="warning" col-md-1>#ID</th> ';
                $tabela .= '<th class="warning" col-md-4>Nome do Artigo </th> ';
                $tabela .= '<th class="warning" col-md-4>Acesse aqui o artigo </th> ';
                $tabela .= '</tr>';
                $tabela .= '<tr>';

                foreach ($artigo as $resultado) {
                    $idProfessor = $resultado['professor_idprofessor'];
                    $idArtigo = $resultado['id_artigos'];

                    $tabela .= "<td class='info col-md-1'>$idArtigo</td>";
                    $tabela .= '<td class="info col-md-8">' .$resultado['nome'] . '</td>';
                    $tabela .= "<td class='info col-md-3'><a href='artigomostrar.php?id=$idArtigo'>Acesse</a></td>";
                    $tabela .= '</tr>';
                    $tabela .= ' </thead>';
                }

                echo $tabela;
            } else {
                header("Location: http://localhost/error.php");
                die();
            }
            ?> 


            <br> </div> 
        
    </body>
</html>
