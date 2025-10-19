<?php
require_once __DIR__ . '/db.php';
$result = mysqli_query($koneksi, "SELECT id, judul, penulis, tahun_terbit FROM data_buku ORDER BY id DESC");
$rows = $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <title>Daftar Data Buku - TIM 08</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="mb-0">Daftar Buku</h4>
          <a href="index.php" class="btn btn-primary btn-sm">+ Tambah Data</a>
        </div>

        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!$rows): ?>
                <tr><td colspan="4" class="text-center text-muted">Belum ada data.</td></tr>
              <?php else: ?>
                <?php foreach ($rows as $r): ?>
                  <tr>
                    <td><?= htmlspecialchars($r['id']) ?></td>
                    <td><?= htmlspecialchars($r['judul']) ?></td>
                    <td><?= htmlspecialchars($r['penulis']) ?></td>
                    <td><?= htmlspecialchars($r['tahun_terbit']) ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <small class="text-muted">Skema mengacu pada file SQL tugas: kolom judul, penulis, tahun_terbit (DATE). </small>
      </div>
    </div>
  </div>
</body>
</html>
