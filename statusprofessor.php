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
            <div id="gtco-started" style="background-color: #A54812 ">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading ">
                        <font color="#D68C2C" >
                        <h2> Aguarde confirmação do administrador para a postagem do seu arquivo!</h2>
                        <hr>  
                    </div>
                    <div class="col-lg-8 col-md-offset-2">
                        <table border="1" class="table table-striped">
                            <center>
                                <thead>
                                    <tr>
                                        <th class="warning" col-md-8>Nome do Arquivo</th>
                                        <th class="warning" col-md-1>Data de Submissão</th>
                                        <th class="warning" col-md-1>Estado</th>
                                    </tr>
                                    <tr>
                                        <th class="info" col-md-8></th>
                                        <th class="info" col-md-1></th>
                                        <th class="info" col-md-1></th>
                                    </tr>
                                </thead>
                            </center>
                        </table>
                    </div>
                    <div class="col-md-4 col-sm-offset-5">
                        <a href="postsgeral.php" > <font color="#D68C2C" size="4"> Faça novas postagens...</a>
                    </div>
                </div>     
            </div>


        </div>
        <?php
        include_once 'footer.php';
        ?> 
    </body>
</html>