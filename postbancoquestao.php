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
        <div class="container">
            <?php
            include_once 'carrosel.php';
            ?>

            <div class="row destaque">
                <h2 style="color:#005858;">Banco de questões:</h2>
                <hr>   
            </div>    

            <?php
            include_once 'footer.php';
            ?>

        </div>

    </body>       
</html>