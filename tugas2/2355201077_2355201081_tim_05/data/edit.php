<?php
include '../form_inputan_proses/proses.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tiket WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
  $nama = $_POST['nama'];
  $tujuan = $_POST['tujuan'];
  $tanggal = $_POST['tanggal'];
  $jumlah = $_POST['jumlah'];
  $harga = $_POST['harga'];

  $update = "UPDATE tiket SET 
              nama='$nama', 
              tujuan='$tujuan', 
              tanggal='$tanggal', 
              jumlah='$jumlah', 
              harga='$harga' 
            WHERE id=$id";

  if (mysqli_query($conn, $update)) {
    echo "<script>alert('Data berhasil diubah!'); window.location='index.php';</script>";
  } else {
    echo "<script>alert('Gagal mengubah data');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Pemesanan Tiket</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h3 class="text-center text-primary mb-4">Edit Data Pemesanan Tiket</h3>
    <form method="post" class="card p-4 shadow">
      <div class="mb-3">
        <label class="form-label fw-semibold">Nama Pemesan</label>
        <input type="text" name="nama" class="form-control" value="<?= $data['nama']; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label fw-semibold">Tujuan</label>
        <input type="text" name="tujuan" class="form-control" value="<?= $data['tujuan']; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label fw-semibold">Tanggal Keberangkatan</label>
        <input type="date" name="tanggal" class="form-control" value="<?= $data['tanggal']; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label fw-semibold">Jumlah Tiket</label>
        <input type="number" name="jumlah" class="form-control" value="<?= $data['jumlah']; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label fw-semibold">Harga per Tiket</label>
        <input type="number" name="harga" class="form-control" value="<?= $data['harga']; ?>" required>
      </div>
      <button type="submit" name="update" class="btn btn-primary w-100">Simpan Perubahan</button>
    </form>
  </div>
</body>
</html>