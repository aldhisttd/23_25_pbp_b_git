<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_barbershop");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_kepster'];
    $tanggal = $_POST['tanggal'];
    $jam_masuk = $_POST['jam_masuk'];
    $jam_pulang = $_POST['jam_pulang'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO absen (nama_kepster, tanggal, jam_masuk, jam_pulang, keterangan)
              VALUES ('$nama', '$tanggal', '$jam_masuk', '$jam_pulang', '$keterangan')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: data_absen.php?status=success");
        exit;
    } else {
        echo "<div style='color:red; text-align:center;'>Gagal menyimpan data: " . mysqli_error($koneksi) . "</div>";
    }
}

mysqli_close($koneksi);
?>
