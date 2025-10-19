<?php
include "koneksi.php";

// ======================
// Hapus Data
// ======================
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $delete = mysqli_query($koneksi, "DELETE FROM wisata WHERE id_destinasi='$id'");
    if ($delete) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='data.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data!'); window.location='data.php';</script>";
    }
    exit;
}

// ======================
// Ambil Data untuk Edit
// ======================
$edit = false;
if (isset($_GET['id'])) {
    $edit = true;
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM wisata WHERE id_destinasi='$id'");
    $data = mysqli_fetch_array($result);
}

// ======================
// Proses Simpan / Update
// ======================
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_destinasi'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];

    if (isset($_POST['id_destinasi']) && $_POST['id_destinasi'] != '') {
        // Update
        $id = $_POST['id_destinasi'];
        $query = mysqli_query($koneksi, "UPDATE wisata SET nama_destinasi='$nama', alamat='$alamat', kontak='$kontak' WHERE id_destinasi='$id'");
        if ($query) {
            echo "<script>alert('Data berhasil diupdate!'); window.location='data.php';</script>";
        } else {
            echo "<script>alert('Gagal update data!');</script>";
        }
    } else {
        // Tambah baru
        $query = mysqli_query($koneksi, "INSERT INTO wisata (nama_destinasi, alamat, kontak) VALUES ('$nama', '$alamat', '$kontak')");
        if ($query) {
            echo "<script>alert('Data berhasil disimpan!'); window.location='data.php';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan data!');</script>";
        }
    }
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

    <form action="" method="post" class="card p-4 shadow-sm">
        <?php if ($edit): ?>
            <input type="hidden" name="id_destinasi" value="<?= $data['id_destinasi']; ?>">
        <?php endif; ?>

        <div class="mb-3">
            <label>Nama Destinasi</label>
            <input type="text" name="nama_destinasi" class="form-control" required
                   value="<?= $edit ? htmlspecialchars($data['nama_destinasi']) : ''; ?>">
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" required
                   value="<?= $edit ? htmlspecialchars($data['alamat']) : ''; ?>">
        </div>
        <div class="mb-3">
            <label>Kontak</label>
            <input type="text" name="kontak" class="form-control" required
                   value="<?= $edit ? htmlspecialchars($data['kontak']) : ''; ?>">
        </div>

        <button type="submit" name="simpan" class="btn btn-success"><?= $edit ? 'Update' : 'Simpan'; ?></button>
        <a href="data.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
