<div id="cabecalho" class="container"><!--centraliza o layout fixo-->
    <div class="row">
        <div class="col-sm-3">
            <a href="/#tcc2/"><img src="Imagens/logo_mais historia.png" class=" img-responsive"></a>
        </div>
        <div class="col-sm-3 col-sm-offset-6">
            <div class="panel panel-success">
                <div class="panel-heading"><a href="entre.php"> Faça seu login aqui!</a></div>
                <?php
                    if (!empty($_SESSION['usuario'])) {
                        include 'logado.php';
                    } 
                    else {
                        include 'naologado.php';
                    }
                    ?>
            </div>
        </div>
    </div>
</div>
