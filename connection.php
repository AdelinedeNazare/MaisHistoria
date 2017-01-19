<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "RsF3546SKY.;Queopps";
$db = "maishistoria";
$port = "3306";

// Create a new connection.
$conn = new mysqli($host, $user, $pass, $db, $port);

// Check the new connection.

if ($conn->connect_error) {
    die("A conexão com o banco de dados não pode ser estabelecida: $conn->connect_error");
}

$conn->set_charset("utf8");
