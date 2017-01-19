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
            //$id = $_GET["id"];
            $query = "SELECT * FROM tb_artigos JOIN tb_assunto ON tb_artigos.tb_assunto_idassunto = tb_assunto.idassunto;";
            // $query = "SELECT * FROM tb_artigos, tb_assunto, professor where tb_artigos.tb_assunto_idassunto = tb_assunto.idassunto and professor.idprofessor=tb_artigos.professor_idprofessor";
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

                foreach ($artigo as $art) {
                    $resultado = $art; //$artigo->fetch_assoc();

                    $idProfessor = $resultado['professor_idprofessor'];
                    //$queryProfessor = "SELECT * FROM professor WHERE idprofessor = $idProfessor";
                    //$professor = $conn->query($queryProfessor)->fetch_assoc();

                    $tabela .= '<td class="info" col-md-1>' . $resultado['id_artigos'] . '</td>';
                    $tabela .= '<td class="info" col-md-1>' .$resultado['nome'] . '</a></td>'; 
                    $tabela .= '<td class="info" col-md-1>'.$resultado['imagem']. 'Acesse</a></td>'; 
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
