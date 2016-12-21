<?php
//EXIBE ERROS
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

//DATAS
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
date_default_timezone_set('America/Sao_Paulo');

//URLS
$urlEndereco  = $_SERVER['HTTP_HOST'];

//CONEXAO
//DEFINE BANCO DEDADOS
$host   = 'localhost';
$user   = 'root';
$pass   = '';
$dbsa     = 'oxygen';

//CONECTA NO BANCO
$conn = mysql_connect($host, $user, $pass) or die ('Erro ao conectar: '.mysql_error());
$dbconn = mysql_select_db($dbsa) or die ('Erro ao selecionar banco: '.mysql_error());

//SET UTF8
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

//FUNÇOES
require_once 'functions.php';
