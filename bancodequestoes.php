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
                <h2 style="color:#005858;">Banco de questões:</h2>
                <hr>   
            </div>
            <!-- Criar função random para gerar modo aleatório nas questões -->
            <!-- Criar gráfico de desempenho para mostrar como o aluno está! o prof falou para usar o google analitycs -->
            <?php
            //$id = $_GET["id"];
            $queryAlternativa = "SELECT * FROM tb_alternativas JOIN tb_questoes ON tb_alternativas.idalternativas=tb_questoes.idquestoes "
                    . "WHERE tb_alternativas.idalternativas=1 or tb_alternativas.idalternativas=2";
            $alternativa = $conn->query($queryAlternativa);

            if ($alternativa->num_rows) {
                $resultado = $alternativa->fetch_assoc();
                $idquestao = $resultado['tb_questoes_idquestoes'];
                $queryquestoes = "SELECT * FROM tb_questoes WHERE idquestoes = $idquestao";
                $nomequestao = $resultado['nomequestao'];
                $enunciadoquestao = $resultado['enunciado'];
                $alt = $resultado['descricao'];

                echo "<div class='col-lg-12'>
            <div id='gtco-started' style='background-color: #A54812'>
                <div class='row animate-box'>
                        <font size='6' color='#D68C2C'> <center>" . $resultado['nomequestao'] . "</center>";
                echo "</font>";
                echo "<hr> </div> <br>";
                echo "<font size='4' style='color:#FFFFFF;'" . $resultado['enunciado'];
                ;
                echo $resultado['descricao'];
                echo "<br> </div></div>";
            } else {
                header("Location: http://localhost/error.php");
                die();
            }
            if ($alternativa->num_rows) {
                $resultado = $alternativa->fetch_assoc();
                $idquestao = $resultado['tb_questoes_idquestoes'];
                $queryquestoes = "SELECT * FROM tb_questoes WHERE idquestoes = $idquestao";
                $nomequestao = $resultado['nomequestao'];
                $enunciadoquestao = $resultado['enunciado'];
                $alt = $resultado['descricao'];

                echo "<div class='col-lg-12'>
            <div id='gtco-started' style='background-color: #A54812'>
                <div class='row animate-box'>
                        <font size='6' color='#D68C2C'> <center>" . $resultado['nomequestao'] . "</center>";
                echo "</font> </div> <br> <hr>";
                echo "<font size='4' style='color:#FFFFFF;'" . $resultado['enunciado'];
                echo $resultado['descricao'];
                echo "<br><br> <a href='gabarito.php'>  <center> <font size='5'> Veja a resposta... </font></center> </a> </div> <br>";
            } else {
                header("Location: http://localhost/error.php");
                die();
            }
            ?>
            <br>
        </div>                                 
        <?php
        include_once 'pluggin.php';
        include_once 'footer.php';
        ?>
    </body>
</html>
