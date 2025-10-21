<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_barbershop");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Absen Kepster Barbershop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container py-5">
    <div class="card shadow-lg">
      <div class="card-header bg-dark text-white text-center">
        <h3 class="mb-0">📅 Data Absen Kepster Barbershop</h3>
      </div>

      <div class="card-body">
        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            ✅ Data absen berhasil disimpan!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        <?php endif; ?>

        <div class="d-flex justify-content-end mb-3">
          <a href="form_absen.php" class="btn btn-success">+ Tambah Absen</a>
        </div>

        <div class="table-responsive">
          <table class="table table-striped table-hover text-center align-middle">
            <thead class="table-dark">
              <tr>
                <th>ID</th>
                <th>Nama Kepster</th>
                <th>Tanggal</th>
                <th>Jam Masuk</th>
                <th>Jam Pulang</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $result = mysqli_query($koneksi, "SELECT * FROM absen ORDER BY tanggal DESC");
              if (mysqli_num_rows($result) > 0):
                  while ($row = mysqli_fetch_assoc($result)):
              ?>
                <tr>
                  <td><?= $row['id']; ?></td>
                  <td><?= htmlspecialchars($row['nama_kepster']); ?></td>
                  <td><?= htmlspecialchars($row['tanggal']); ?></td>
                  <td><?= htmlspecialchars($row['jam_masuk']); ?></td>
                  <td><?= htmlspecialchars($row['jam_pulang']); ?></td>
                  <td>
                    <?php if ($row['keterangan'] == "Hadir"): ?>
                      <span class="badge bg-success">Hadir</span>
                    <?php elseif ($row['keterangan'] == "Izin"): ?>
                      <span class="badge bg-warning text-dark">Izin</span>
                    <?php elseif ($row['keterangan'] == "Sakit"): ?>
                      <span class="badge bg-info text-dark">Sakit</span>
                    <?php else: ?>
                      <span class="badge bg-danger">Alpha</span>
                    <?php endif; ?>
                  </td>
                </tr>
              <?php
                  endwhile;
              else:
                  echo "<tr><td colspan='6' class='text-center text-muted'>Belum ada data absen.</td></tr>";
              endif;
              mysqli_close($koneksi);
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
