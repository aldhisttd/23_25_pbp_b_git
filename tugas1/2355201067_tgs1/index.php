<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Background full screen dengan efek blur dan gradasi */
    body {
      background: linear-gradient(135deg, rgba(10, 24, 61, 0.9), rgba(72, 12, 168, 0.9)), 
                  url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1600&q=80');
      background-size: cover;
      background-position: center;
      backdrop-filter: blur(5px);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
      color: white;
    }

    /* Card transparan gelap */
    .card {
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(12px);
      transition: 0.4s ease;
      width: 30rem;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 35px rgba(0, 0, 0, 0.6);
    }

    h3 {
      text-align: center;
      font-weight: 700;
      color: #fff;
      text-shadow: 0 0 10px rgba(255,255,255,0.3);
    }

    .form-label {
      color: #dfe6e9;
      font-weight: 600;
    }

    .form-control {
      background-color: transparent;
      border: 1.5px solid rgba(255,255,255,0.3);
      border-radius: 10px;
      color: #fff;
      transition: all 0.3s;
    }

    .form-control::placeholder {
      color: rgba(255,255,255,0.6);
    }

    .form-control:focus {
      border-color: #6c5ce7;
      box-shadow: 0 0 10px #6c5ce7;
      background-color: rgba(255,255,255,0.05);
    }

    .btn-primary {
      background: linear-gradient(90deg, #6c5ce7, #00cec9);
      border: none;
      border-radius: 10px;
      padding: 10px;
      font-weight: 600;
      transition: all 0.3s;
    }

    .btn-primary:hover {
      transform: scale(1.05);
      background: linear-gradient(90deg, #00cec9, #6c5ce7);
      box-shadow: 0 0 15px #6c5ce7;
    }
  </style>
</head>
<body>

  <div class="card p-4 shadow-lg">
    <h3 class="mb-4">Form Register</h3>
    <form>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required>
      </div>

      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Masukkan username" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Masukkan email aktif" required>
      </div>

      <button type="submit" class="btn btn-primary w-100 mt-3">Daftar</button>
    </form>
  </div>

</body>
</html>
