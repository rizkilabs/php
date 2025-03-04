<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "belajar_php";


$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_error){
    die("Koneksi gagal: " . $mysqli->connect_error);
} 
?>