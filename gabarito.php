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
                <h2 style="color:#005858;">Gabarito</h2>
                <hr>    
            </div>
            <div class="col-lg-12  ">
                <div id="gtco-started" style="background-color: #A54812 ">
                    <br>
                    <font color="#FFFFF" >
                    <h4> 1- A</h4>
                    <h4> 2- A</h4>
                    <br>    



                </div>
            </div>
        </div>
        <?php
        include_once 'pluggin.php';
        include_once 'footer.php';
        ?>
    </body>
</html>