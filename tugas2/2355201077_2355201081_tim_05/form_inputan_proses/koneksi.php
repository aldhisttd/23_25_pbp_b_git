<?php
$servername = "localhost";
$username = "root"; // default XAMPP
$password = "";     // kosongkan jika tanpa password
$database = "tugas_pbp";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("<h3 style='color:red;text-align:center;'>Koneksi gagal: " . $conn->connect_error . "</h3>");
}
?>
