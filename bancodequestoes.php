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
        <!-- Criar função random para gerar modo aleatório nas questões -->
        <!-- Criar gráfico de desempenho para mostrar como o aluno está! o prof falou para usar o google analitycs -->
        <?php
        $id = $_GET["id"];
        $queryAlternativa = "SELECT * FROM tb_alternativas JOIN tb_questoes ON tb_alternativas.idalternativas=tb_questoes.idquestoes WHERE tb_questoes.idquestoes = $id";
        $alternativa = $conn->query($queryAlternativa);

        if ($alternativa->num_rows == 1) {
            $resultado = $alternativa->fetch_assoc();
            $idquestao = $resultado['tb_questoes_idquestoes'];
            $queryquestoes = "SELECT * FROM tb_questoes WHERE idquestoes = $idquestao";
            $nomequestao = $resultado['nomequestao'];
            $enunciadoquestao = $resultado['enunciado'];
            $alt= $resultado['descricao'];   
        } else {
            header("Location: http://localhost/error.php");
            die();
        }
        ?>
        <div class="container conteudo">
            <?php
            include_once 'carrosel.php';
            ?>
            <div class="row destaque">
                <h2 style="color:#005858;">Banco de questões:</h2>
                <hr>   
            </div>    
            <h3> <b><?php echo $resultado['nomequestao']; ?></b></h3>
            <br />  <?php echo $resultado['enunciado']; ?>
            <br />  <?php echo $resultado['descricao']; ?>
            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><p align="left">
                <a href="bancodequestoes.php"> <button type="submit" class="btn btn-default btn-sm"> Enviar </a></button>           
            <br /> 
            <?php
            include_once 'pluggin.php';
            include_once 'footer.php';
            ?>
        </div>
    </body>
</html>
