<?php
// halaman form
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
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="mb-0 text-primary">Form Input Data Buku</h4>
              <a href="data.php" class="btn btn-outline-secondary btn-sm">Lihat Data</a>
            </div>

            <?php if ($msg): ?>
              <div class="alert alert-<?= htmlspecialchars($type ?: 'info') ?>"><?= htmlspecialchars($msg) ?></div>
            <?php endif; ?>

            <form action="proses_tambah.php" method="post" novalidate>
              <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Mis. Laskar Pelangi" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control" placeholder="Mis. Andrea Hirata" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Tahun Terbit</label>
                <input type="date" name="tahun_terbit" class="form-control" required>
                <div class="form-text">Format DATE (YYYY-MM-DD)</div>
              </div>
              <button class="btn btn-primary w-100" type="submit">Simpan</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
