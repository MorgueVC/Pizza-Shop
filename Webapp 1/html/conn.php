<?php
$host = 'mysql_db';
$db   = 'db_login';
$user = 'root';
$pass = 'rootpassword';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$conn = new PDO($dsn, $user, $pass);
?>