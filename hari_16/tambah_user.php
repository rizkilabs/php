<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "belajar_php";

$conn = new mysqli($host, $user, $pass, $db);

$sql = "INSERT INTO users (email, password) VALUES ('emrizkidev@gmail.com', '12345678')";



if(mysqli_query($conn, $sql)){
    echo "Data berhasil ditambahkan";
} else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>