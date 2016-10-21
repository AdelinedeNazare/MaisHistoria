<?php
session_start();

session_destroy();

session_start();

$_SESSION['logindeslogado'] = 'Até a próxima';

header("Location: index.php");

?>
