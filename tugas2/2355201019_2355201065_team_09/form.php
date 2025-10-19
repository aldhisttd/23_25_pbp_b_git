<?php
include "koneksi.php";

$edit = false;
$data = [
    'id_destinasi' => '',
    'nama_destinasi' => '',
    'alamat' => '',
    'kontak' => ''
];

if (isset($_GET['id'])) {
    $edit = true;
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM wisata WHERE id_destinasi='$id'");
    $data = mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $edit ? 'Edit' : 'Tambah'; ?> Data Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4"><?= $edit ? 'Edit' : 'Tambah'; ?> Destinasi Wisata</h2>

    <form action="proses.php" method="post" class="card p-4 shadow-sm">
        <input type="hidden" name="id_destinasi" value="<?= $data['id_destinasi']; ?>">

        <div class="mb-3">
            <label>Nama Destinasi</label>
            <input type="text" name="nama_destinasi" class="form-control" required
                   value="<?= htmlspecialchars($data['nama_destinasi']); ?>">
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" required
                   value="<?= htmlspecialchars($data['alamat']); ?>">
        </div>
        <div class="mb-3">
            <label>Kontak</label>
            <input type="text" name="kontak" class="form-control" required
                   value="<?= htmlspecialchars($data['kontak']); ?>">
        </div>

        <button type="submit" name="<?= $edit ? 'update' : 'simpan'; ?>" class="btn btn-success">
            <?= $edit ? 'Update' : 'Simpan'; ?>
        </button>
        <a href="data.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
