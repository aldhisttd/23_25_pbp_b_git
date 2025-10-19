<?php
require_once __DIR__ . '/db.php';

$msg  = $_GET['msg']  ?? '';
$type = $_GET['type'] ?? '';

$result = mysqli_query($koneksi, "SELECT id, judul, penulis, tahun_terbit FROM data_buku ORDER BY id DESC");
$rows = $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];
$total = $rows ? count($rows) : 0;
?>
<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <title>Daftar Data Buku - TIM 08</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(135deg, #0d6efd 40%, #dc3545 90%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px
    }

    .card {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0, 0, 0, .2)
    }

    .card-header {
      background: linear-gradient(90deg, #0d6efd, #dc3545);
      color: #fff;
      text-align: center;
      padding: 1.2rem;
      font-size: 1.25rem;
      font-weight: 600;
      letter-spacing: .3px
    }

    .btn-primary {
      background: linear-gradient(90deg, #0d6efd, #6610f2);
      border: none
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #6610f2, #dc3545)
    }

    .btn-outline-secondary {
      border-color: #dc3545;
      color: #dc3545
    }

    .btn-outline-secondary:hover {
      background-color: #dc3545;
      color: #fff
    }

    .table thead tr {
      background: linear-gradient(90deg, #0d6efd, #6610f2)
    }

    .table thead th {
      color: #fff !important;
      border: 0
    }

    .table tbody tr:hover {
      background-color: rgba(13, 110, 253, .06)
    }

    .badge-soft {
      background-color: rgba(220, 53, 69, .1);
      color: #dc3545;
      border: 1px solid rgba(220, 53, 69, .25)
    }
  </style>
</head>

<body>
  <div class="container px-0">
    <div class="col-12 col-lg-10 mx-auto">
      <div class="card">
        <div class="card-header">📚 Daftar Data Buku - TIM 08</div>
        <div class="card-body bg-white">
          <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center mb-3">
            <span class="badge badge-soft rounded-pill px-3 py-2">Total: <?= (int)$total ?></span>
            <a href="index.php" class="btn btn-primary btn-sm">+ Tambah Data</a>
          </div>

          <?php if ($msg): ?>
            <div class="alert alert-<?= htmlspecialchars($type ?: 'info') ?> text-center">
              <?= htmlspecialchars($msg) ?>
            </div>
          <?php endif; ?>

          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead>
                <tr>
                  <th style="width:80px">#</th>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th style="width:160px">Tahun Terbit</th>
                </tr>
              </thead>
              <tbody>
                <?php if (!$rows): ?>
                  <tr>
                    <td colspan="4" class="text-center text-muted py-4">
                      Belum ada data. Klik <a href="index.php">tambah data</a> untuk mulai mengisi.
                    </td>
                  </tr>
                <?php else: ?>
                  <?php foreach ($rows as $r): ?>
                    <tr>
                      <td class="fw-semibold">#<?= htmlspecialchars($r['id']) ?></td>
                      <td><?= htmlspecialchars($r['judul']) ?></td>
                      <td><?= htmlspecialchars($r['penulis']) ?></td>
                      <td><span class="badge text-bg-light border"><?= htmlspecialchars($r['tahun_terbit']) ?></span></td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>

          <div class="mt-3">
            <small class="text-muted">
              Skema tabel: <code>judul</code>, <code>penulis</code>, <code>tahun_terbit</code> (DATE).
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>