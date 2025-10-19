<?php
// ====== Koneksi ke Database ======
$servername = "localhost";
$username = "root"; // default XAMPP
$password = "";     // kosongkan jika tidak ada password
$database = "tugas_pbp";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
  die("<h3 style='color:red; text-align:center;'>Koneksi gagal: " . $conn->connect_error . "</h3>");
}

// ====== Ambil data dari form ======
$nama = $_POST['nama'];
$tujuan = $_POST['tujuan'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$total = $jumlah * $harga;

// ====== Query simpan data ======
$sql = "INSERT INTO tiket_bus (nama, tujuan, tanggal, jumlah, harga, total)
        VALUES ('$nama', '$tujuan', '$tanggal', '$jumlah', '$harga', '$total')";

if ($conn->query($sql) === TRUE) {
  echo "
  <div style='text-align:center; margin-top:50px; font-family:sans-serif;'>
    <h2 style='color:green;'>✅ Pemesanan Berhasil!</h2>
    <p>Data tiket untuk <strong>$nama</strong> ke <strong>$tujuan</strong> telah disimpan.</p>
    <p>Total Pembayaran: <strong>Rp$total</strong></p>
    <a href='index.php' class='btn btn-primary mt-3'>Kembali ke Form</a>
  </div>";
} else {
  echo "<h3 style='color:red;'>❌ Error: " . $conn->error . "</h3>";
}

$conn->close();
?>