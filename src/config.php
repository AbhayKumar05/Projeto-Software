<?php
/* $conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed'); */

// Configurações do PostgreSQL
$host = "localhost";
$dbname = "shop_db"; // o nome do banco de dados que você criou
$user = "postgres";  // seu usuário PostgreSQL
$password = "root";

// Criar a conexão
$connection = pg_connect("host=$host dbname=$dbname user=$user password=$password");

if (!$connection) {
    die("Erro: Não foi possível conectar ao banco de dados PostgreSQL.");
} ?>