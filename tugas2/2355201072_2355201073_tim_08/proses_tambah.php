<?php
require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: index.php?msg=Akses tidak valid&type=danger'); exit;
}

$judul        = trim($_POST['judul'] ?? '');
$penulis      = trim($_POST['penulis'] ?? '');
$tahun_terbit = trim($_POST['tahun_terbit'] ?? '');

$errors = [];
if ($judul === '')        $errors[] = 'Judul wajib diisi.';
if ($penulis === '')      $errors[] = 'Penulis wajib diisi.';
if ($tahun_terbit === '') $errors[] = 'Tahun terbit wajib diisi.';
if ($tahun_terbit && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $tahun_terbit)) {
  $errors[] = 'Format tahun terbit harus YYYY-MM-DD.';
}

if ($errors) {
  $msg = urlencode(implode(' ', $errors));
  header("Location: index.php?msg={$msg}&type=danger"); exit;
}

$stmt = mysqli_prepare($koneksi, "INSERT INTO data_buku (judul, penulis, tahun_terbit) VALUES (?,?,?)");
if (!$stmt) {
  $msg = urlencode('Gagal menyiapkan statement: ' . mysqli_error($koneksi));
  header("Location: index.php?msg={$msg}&type=danger"); exit;
}

mysqli_stmt_bind_param($stmt, 'sss', $judul, $penulis, $tahun_terbit);
if (!mysqli_stmt_execute($stmt)) {
  $msg = urlencode('Gagal menyimpan data: ' . mysqli_error($koneksi));
  mysqli_stmt_close($stmt);
  header("Location: index.php?msg={$msg}&type=danger"); exit;
}

mysqli_stmt_close($stmt);
header('Location: index.php?msg=Data berhasil disimpan.&type=success'); 
exit;
