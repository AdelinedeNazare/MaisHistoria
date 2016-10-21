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
                <h2 style="color:#005858;">Insira uma imagem:</h2>
                <hr>   
            </div>    
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Selecione uma imagem para upload:
                <input type="file" name="fileToUpload" id="fileToUpload"> <br>
                <input type="submit" value="Upload Image" name="submit">
            </form>        
            <br><br><br>
        </div>
        <?php
        include_once 'footer.php';
        ?>
    </body>       
</html>