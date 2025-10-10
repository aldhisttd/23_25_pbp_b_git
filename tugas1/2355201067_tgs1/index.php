<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #74b9ff, #a29bfe);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Poppins", sans-serif;
    }

    .card {
      background: rgba(255, 255, 255, 0.9);
      border: none;
      border-radius: 18px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
    }

    h3 {
      font-weight: 700;
      color: #0984e3 !important;
      letter-spacing: 1px;
    }

    .form-label {
      color: #2d3436;
    }

    .form-control {
      border-radius: 10px;
      border: 1.5px solid #dfe6e9;
      transition: all 0.3s;
    }

    .form-control:focus {
      border-color: #0984e3;
      box-shadow: 0 0 8px rgba(9, 132, 227, 0.4);
    }

    .btn-primary {
      background: linear-gradient(90deg, #0984e3, #6c5ce7);
      border: none;
      border-radius: 10px;
      transition: all 0.3s;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #74b9ff, #a29bfe);
      transform: scale(1.03);
    }
  </style>
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

  <div class="card shadow-lg p-4" style="width: 28rem;">
    <h3 class="text-center mb-4 text-primary">Form Register</h3>
    <form>
      <div class="mb-3">
        <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required>
      </div>

      <div class="mb-3">
        <label for="username" class="form-label fw-semibold">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Masukkan username" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label fw-semibold">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Masukkan email aktif" required>
      </div>

      <button type="submit" class="btn btn-primary w-100 mt-3">Daftar</button>
    </form>
  </div>

</body>
</html>
