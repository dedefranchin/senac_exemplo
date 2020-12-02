<?php
session_start();
$db_type = 'mysql';
$db_database = 'andre_progweb_login';
$db_hostname = 'localhost';
$db_username = "andre";
$db_senha = "bebaleite";

$dsn = "$db_type:dbname=$db_database;hostname=$db_hostname";

?>