<?php 

$server = "localhost";
$username = "root";
$password = "";
$db_name = "crud_admin(1)";

$db = mysqli_connect($server, $username, $password, $db_name);
if(!$db){
    die("Gagal terhubung");
}