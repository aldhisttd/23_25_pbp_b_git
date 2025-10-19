<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_mobil");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $merk  = mysqli_real_escape_string($koneksi, $_POST['merk']);
    $tipe  = mysqli_real_escape_string($koneksi, $_POST['tipe']);
    $tahun = mysqli_real_escape_string($koneksi, $_POST['tahun']);
    $warna = mysqli_real_escape_string($koneksi, $_POST['warna']);
    $harga = mysqli_real_escape_string($koneksi, $_POST['harga']);

    $sql = "INSERT INTO mobil (merk, tipe, tahun, warna, harga)
            VALUES ('$merk', '$tipe', '$tahun', '$warna', '$harga')";

    if (mysqli_query($koneksi, $sql)) {
        // Redirect otomatis ke halaman data mobil
        header("Location: data_mobil.php?status=sukses");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
