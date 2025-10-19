<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_mobil");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$merk = $_POST['merk'];
$tipe = $_POST['tipe'];
$tahun = $_POST['tahun'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];

$sql = "INSERT INTO mobil (merk, tipe, tahun, warna, harga)
        VALUES ('$merk', '$tipe', '$tahun', '$warna', '$harga')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan!<br>";
    echo "<a href='data_mobil.php'>Lihat Data Mobil</a>";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>