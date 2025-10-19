<?php
include '../form_inputan_proses/proses.php';

$id = $_GET['id'];
$hapus = mysqli_query($conn, "DELETE FROM tiket WHERE id=$id");

if ($hapus) {
  echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
} else {
  echo "<script>alert('Gagal menghapus data'); window.location='index.php';</script>";
}
?>