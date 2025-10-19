<?php
require_once __DIR__ . '/db.php';

// helper redirect
function go($url, $msg, $type = 'info') {
  $sep = (strpos($url, '?') !== false) ? '&' : '?';
  header("Location: {$url}{$sep}" . http_build_query(['msg' => $msg, 'type' => $type]));
  exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  go('data.php', 'Akses tidak valid.', 'danger');
}

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
if (!$id || $id <= 0) {
  go('data.php', 'ID tidak valid.', 'danger');
}

$stmt = mysqli_prepare($koneksi, "DELETE FROM data_buku WHERE id=?");
if (!$stmt) {
  go('data.php', 'Gagal menyiapkan statement: ' . mysqli_error($koneksi), 'danger');
}

mysqli_stmt_bind_param($stmt, 'i', $id);
if (!mysqli_stmt_execute($stmt)) {
  $err = mysqli_error($koneksi);
  mysqli_stmt_close($stmt);
  go('data.php', 'Gagal menghapus data: ' . $err, 'danger');
}

mysqli_stmt_close($stmt);
go('data.php', 'Data berhasil dihapus.', 'success');
