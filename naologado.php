<form action="valida.php" method="POST">
    <form class="form-login">
        <div class="form-group-sm">
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="email">
        </div>
        <div class="form-group-sm">
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-default btn-sm">Entrar </button>
        <p class="text-center text-danger">
            <?php
            if (isset($_SESSION['loginErro'])) {
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }
            ?>
        </p>
        <p class="text-center text-success">
            <?php
            if (isset($_SESSION['logindeslogado'])) {
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
        </p>
    <a href="cadastro.php">Registre-se professor</a>
</form>
