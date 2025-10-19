<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Destinasi Wisata</h2>

    <a href="form.php" class="btn btn-primary mb-3">+ Tambah Data</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Destinasi</th>
                <th>Alamat</th>
                <th>Kontak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM wisata");
            while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($data['nama_destinasi']); ?></td>
                <td><?= htmlspecialchars($data['alamat']); ?></td>
                <td><?= htmlspecialchars($data['kontak']); ?></td>
                <td>
                    <a href="form.php?id=<?= $data['id_destinasi']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="proses.php?hapus=<?= $data['id_destinasi']; ?>" onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>