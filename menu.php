<nav class="navbar navbar-static-top menu">
    <div class="container">
        <!--div class="container"-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=" index.php">MaisHistória</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li> <a href="artigo.php">Artigos</a> </li>
                <li><a href="imagens.php">Imagens</a></li>
                <li><a href="videos.php">Vídeos</a></li>
                <li><a href="bancodequestoes.php">Banco de questões</a></li>
            </ul>
            <form action="busca.php" class="navbar-form navbar-right" method="post" role="search">
                <div class="form-group">
                    <input name="search-text" type="text" class="form-control" placeholder="Pesquisa">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
        </div>
    </div>
</nav>
