<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

  <div class="card shadow-lg p-4" style="width: 28rem; border-radius: 20px;">
    <h3 class="text-center mb-4 text-primary">Form Register</h3>
    <form>
      <div class="mb-3">
        <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama">
      </div>

      <div class="mb-3">
        <label for="username" class="form-label fw-semibold">Username</label>
        <input type="text" class="form-control" id="username" >
      </div>

      <div class="mb-3">
        <label for="email" class="form-label fw-semibold">Email</label>
        <input type="email" class="form-control" id="email" >
      </div>

      <button type="submit" class="btn btn-primary w-100 mt-3">Daftar</button>
    </form>
  </div>

</body>
</html>
