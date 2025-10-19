<?php
include '../form_inputan_proses/proses.php'; // gunakan koneksi dari file proses.php
$query = "SELECT * FROM tiket";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Tiket Bus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Daftar Pemesanan Tiket Bus</h2>
    <div class="text-end mb-3">
      <a href="../form_inputan_proses/form.php" class="btn btn-success">+ Tambah Pemesanan</a>
    </div>
    <table class="table table-bordered table-striped">
      <thead class="table-primary text-center">
        <tr>
          <th>ID</th>
          <th>Nama Pemesan</th>
          <th>Tujuan</th>
          <th>Tanggal</th>
          <th>Jumlah</th>
          <th>Harga</th>
          <th>Total</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr class='text-center'>
                    <td>{$row['id']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['tujuan']}</td>
                    <td>{$row['tanggal']}</td>
                    <td>{$row['jumlah']}</td>
                    <td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>
                    <td>Rp " . number_format($row['jumlah'] * $row['harga'], 0, ',', '.') . "</td>
                    <td>
                      <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                      <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin hapus data ini?\")'>Hapus</a>
                    </td>
                  </tr>";
          }
        } else {
          echo "<tr><td colspan='8' class='text-center text-muted'>Belum ada data</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>