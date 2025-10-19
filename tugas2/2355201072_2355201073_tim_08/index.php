<?php
$msg  = $_GET['msg']  ?? '';
$type = $_GET['type'] ?? '';
?>
<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <title>Input Data Buku - TIM 08</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background: linear-gradient(135deg, #0d6efd 40%, #dc3545 90%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .card-header {
      background: linear-gradient(90deg, #0d6efd, #dc3545);
      color: white;
      text-align: center;
      padding: 1.2rem;
      font-size: 1.25rem;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .btn-primary {
      background: linear-gradient(90deg, #0d6efd, #6610f2);
      border: none;
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #6610f2, #dc3545);
    }

    a.btn-outline-secondary {
      border-color: #dc3545;
      color: #dc3545;
    }

    a.btn-outline-secondary:hover {
      background-color: #dc3545;
      color: white;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="col-lg-6 mx-auto">
      <div class="card shadow">
        <div class="card-header">📚 Form Input Data Buku - TIM 08</div>
        <div class="card-body bg-white">

          <div class="d-flex justify-content-end mb-3">
            <a href="data.php" class="btn btn-outline-secondary btn-sm">Lihat Data</a>
          </div>

          <?php if ($msg): ?>
            <div class="alert alert-<?= htmlspecialchars($type ?: 'info') ?> text-center">
              <?= htmlspecialchars($msg) ?>
            </div>
          <?php endif; ?>

          <form action="proses_tambah.php" method="post" novalidate>
            <div class="mb-3">
              <label class="form-label fw-semibold text-primary">Judul Buku</label>
              <input type="text" name="judul" class="form-control border-primary" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold text-danger">Penulis</label>
              <input type="text" name="penulis" class="form-control border-danger" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold text-primary">Tahun Terbit</label>
              <input type="date" name="tahun_terbit" class="form-control border-primary" required>
              <div class="form-text text-muted">Gunakan format YYYY-MM-DD</div>
            </div>

            <button class="btn btn-primary w-100 py-2 mt-3">💾 Simpan Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>