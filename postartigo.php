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
                        <font color="#D68C2C" ><h2>Insira seu artigo:</h2>
                        <hr>  
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="row destaque">        

                    </div>
                </div>
            </div>
        </div>
        <?php
        include_once 'footer.php';
        ?>  
    </body>   
</html>
