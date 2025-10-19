<?php
// Hubungkan ke file koneksi
include 'koneksi.php';

// Ambil data dari form
$nama_kost    = $_POST['nama_kost'];
$jumlah_kamar = $_POST['jumlah_kamar'];
$status        = $_POST['status'];
$alamat        = $_POST['alamat'];
$no_hp         = $_POST['no_hp'];

// Query untuk simpan ke database
$sql = "INSERT INTO kost (nama_kost, jumlah_kamar, status, alamat, no_hp)
        VALUES ('$nama_kost', '$jumlah_kamar', '$status', '$alamat', '$no_hp')";

// Eksekusi query dan cek hasilnya
if (mysqli_query($koneksi, $sql)) {
    // Jika berhasil, langsung pindah ke halaman tampil_data.php
    header("Location: data.php");
    exit();
} else {
    echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
