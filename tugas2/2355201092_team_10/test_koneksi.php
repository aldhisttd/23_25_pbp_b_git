<?php
$koneksi = mysqli_connect("localhost:8111", "root", "", "db_barbershop");

if ($koneksi) {
    echo "Koneksi ke database berhasil!";
} else {
    echo "Koneksi gagal: " . mysqli_connect_error();
}
?>
