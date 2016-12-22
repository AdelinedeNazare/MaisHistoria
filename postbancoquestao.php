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
                        <h2>Insira aqui seu banco de questões:</h2>
                        <hr>  
                    </div>
                    <div class="col-sm-4 col-sm-offset-4">
                        <form class="form-inline" action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="imagem" required="">
                                </div>                             
                            </div>
                   </div> <br>
                    <br><div class="col-md-2 col-sm-offset-5">
                        <Br><button type="submit" name="enviar" class="btn btn-default btn-block"><b>Enviar Questão</b></button> <br>
                    </div> 
                    <div class="col-md-4 col-sm-offset-5">
                        <a href="postsgeral.php" > <font color="#D68C2C" size="4"> Volte para a página anterior...</a>
                    </div>
                </div>
            </div>
        </div>
 <br>        
<?php
include_once 'footer.php';
?> 
    </body>
</html>