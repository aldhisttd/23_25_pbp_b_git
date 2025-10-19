<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "rumah_sakit");

if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}

$nama_pasien   = $_POST['nama_pasien'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat        = $_POST['alamat'];
$no_hp         = $_POST['no_hp'];
$poli_tujuan   = $_POST['poli_tujuan'];
$penyakit      = $_POST['penyakit'];
$nama_dokter   = $_POST['nama_dokter'];
$tanggal_daftar = $_POST['tanggal_daftar'];

$sql = "INSERT INTO pasien (nama_pasien, jenis_kelamin, tanggal_lahir, alamat, no_hp, poli_tujuan, penyakit, nama_dokter, tanggal_daftar)
        VALUES ('$nama_pasien', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$no_hp', '$poli_tujuan', '$penyakit', '$nama_dokter', '$tanggal_daftar')";

if ($koneksi->query($sql) === TRUE) {
  header("Location: data.php");
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
