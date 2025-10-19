<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "kost");

// Cek koneksi
if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$nama_kost = $_POST['nama_kost'];
$jumlah_kamar = $_POST['jumlah_kamar'];
$status = $_POST['status'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

// Query insert
$sql = "INSERT INTO kost (nama_kost, jumlah_kamar, status, alamat, no_hp)
        VALUES ('$nama_kost', '$jumlah_kamar', '$status', '$alamat', '$no_hp')";

// Eksekusi query
if (mysqli_query($koneksi, $sql)) {
  echo "<script>
          alert('Data Kost berhasil disimpan!');
          window.location.href='form_input.php';
        </script>";
} else {
  echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
