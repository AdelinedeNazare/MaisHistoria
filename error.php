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
                        <h1 style="color:#005858;"> Página não encontrada</h1>
                        <hr>   
                    </div>    
<?php
            include_once 'pluggin.php';
            include_once 'footer.php';
            ?>

        </div>
    </body>
</html>