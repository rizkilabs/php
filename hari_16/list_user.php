<?php

include "koneksi.php";

$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID " . $row['id'] . " - Email: " . $row['email'] . " - Nama: " . $row['nama'] . "<br>";
    }
} else {
    echo "Tidak ada data";
}


$mysqli->close();
?>