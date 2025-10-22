<?php
require_once 'config.php';

$msg = $_GET['msg'] ?? '';
$sql = "SELECT * FROM kendaraan ORDER BY id_kendaraan DESC";
$result = $conn->query($sql);
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Motor - motor_db</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #7593b4ff, #ffffff);
      min-height: 100vh;
    }
    .card {
      border-radius: 1rem;
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }
    thead th {
      background-color: #0d6efd;
      color: white;
      position: sticky;
      top: 0;
    }
  </style>
</head>
<body>
<div class="container py-5">
  <div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h3 class="mb-0">Daftar Data Motor</h3>
      <a href="form_kendaraan.php" class="btn btn-success">+ Tambah Data</a>
    </div>

    <?php if ($msg): ?>
      <div class="alert alert-info"><?= htmlspecialchars($msg) ?></div>
    <?php endif; ?>

    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle text-center">
        <thead>
          <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Merk</th>
            <th>CC</th>
            <th>Harga (Rp)</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
              <tr>
                <td><?= $row['id_kendaraan'] ?></td>
                <td><?= htmlspecialchars($row['brand']) ?></td>
                <td><?= htmlspecialchars($row['merk']) ?></td>
                <td><?= number_format($row['cc']) ?> cc</td>
                <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
              </tr>
            <?php endwhile; ?>
          <?php else: ?>
            <tr>
              <td colspan="5" class="text-muted">Belum ada data motor yang tersimpan.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>