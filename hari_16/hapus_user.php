<?php
include "koneksi.php";

$id = 2;

$sql = "DELETE FROM users WHERE id=$id";
if(mysqli_query($mysqli, $sql)){
    echo "Data berhasil dihapus";
} else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($mysqli);
?>