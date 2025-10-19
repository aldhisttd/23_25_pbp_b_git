<?php
$host = "127.0.0.1"; // gunakan IP langsung, lebih stabil dari 'localhost'
$user = "root";
$pass = ""; // kosongkan kalau default XAMPP
$db   = "kost";
$port = 3307; // tambahkan port MySQL kamu di sini

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $pass, $db, $port);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil"; // bisa aktifkan ini untuk tes
?>

