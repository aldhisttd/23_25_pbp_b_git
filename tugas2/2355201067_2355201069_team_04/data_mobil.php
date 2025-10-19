<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_mobil");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$result = mysqli_query($koneksi, "SELECT * FROM mobil ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Mobil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="card shadow-lg">
      <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h3 class="mb-0">Data Mobil</h3>
        <a href="tambah_mobil.php" class="btn btn-light btn-sm">+ Tambah Data</a>
      </div>
      <div class="card-body">
        <?php if (isset($_GET['status']) && $_GET['status'] == 'sukses'): ?>
          <div class="alert alert-success">✅ Data mobil berhasil disimpan!</div>
        <?php endif; ?>

        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Merk</th>
              <th>Tipe</th>
              <th>Tahun</th>
              <th>Warna</th>
              <th>Harga (Rp)</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['merk']}</td>
                        <td>{$row['tipe']}</td>
                        <td>{$row['tahun']}</td>
                        <td>{$row['warna']}</td>
                        <td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>
                      </tr>";
              }
            } else {
              echo "<tr><td colspan='6' class='text-center'>Belum ada data mobil</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
mysqli_close($koneksi);
?>
