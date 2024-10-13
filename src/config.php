<?php
/* $conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed'); */

// Configurações do PostgreSQL
$host = "localhost";
$dbname = "shop_db";
$user = "postgres";  // The postgres role you're using
$password = "root";  // The password you set


// Criar a conexão
$connection = pg_connect("host=$host dbname=$dbname user=$user password=$password");

if (!$connection) {
    die("Erro: Não foi possível conectar ao banco de dados PostgreSQL.");
} ?>