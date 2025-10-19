<?php
require_once 'config.php';
$msg = $_GET['msg'] ?? '';
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Input Data Motor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(120deg, #f0f4ff, #ffffff);
    }
    .card {
      border-radius: 1rem;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card p-4">
        <h3 class="mb-3 text-center">Form Input Data Motor</h3>

        <?php if ($msg): ?>
          <div class="alert alert-info"><?= htmlspecialchars($msg) ?></div>
        <?php endif; ?>

        <form action="proses_form_kendaraan.php" method="post">
          <input type="hidden" name="action" value="add">

          <div class="mb-3">
            <label class="form-label">Brand</label>
            <input type="text" class="form-control" name="brand" placeholder="Contoh: Honda" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Merk / Tipe</label>
            <input type="text" class="form-control" name="merk" placeholder="Contoh: Vario 150" required>
          </div>

          <div class="mb-3">
            <label class="form-label">CC</label>
            <input type="number" class="form-control" name="cc" placeholder="Contoh: 150" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Harga (Rp)</label>
            <input type="number" class="form-control" name="harga" placeholder="Contoh: 25000000" required>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">Simpan Data</button>
          </div>
        </form>

        <div class="text-center mt-3">
          <a href="data_motor.php" class="btn btn-outline-secondary">Lihat Data Motor</a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
