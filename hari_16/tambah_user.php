<?php

include 'koneksi.php';

$sql = "INSERT INTO users (email, nama) VALUES ('rizki@mail.com', 'Mochamad Rizki')";

if(mysqli_query($mysqli, $sql)){
    echo "Data berhasil ditambahkan";
} else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($mysqli);
?>