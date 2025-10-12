<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Register</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .register-container {
      background: #fff;
      padding: 40px;
      border-radius: 15px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
      text-align: center;
      animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h2 {
      color: #333;
      margin-bottom: 25px;
    }

    .input-group {
      margin-bottom: 20px;
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 6px;
      color: #444;
      font-weight: 600;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 15px;
      transition: all 0.3s ease;
    }

    input:focus {
      border-color: #2575fc;
      box-shadow: 0 0 6px rgba(37,117,252,0.3);
      outline: none;
    }

    button {
      background: linear-gradient(135deg, #2575fc, #6a11cb);
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
      width: 100%;
      font-weight: bold;
    }

    button:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #6a11cb, #2575fc);
    }

    .footer-text {
      margin-top: 20px;
      color: #666;
      font-size: 14px;
    }

  </style>
</head>
<body>

  <div class="register-container">
    <h2>Form Register</h2>
    <form method="post" action="">
      <div class="input-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
      </div>
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Masukkan username" required>
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email aktif" required>
      </div>
      <button type="submit" name="register">Daftar Sekarang</button>
    </form>

    <div class="footer-text">
      &copy; <?php echo date("Y"); ?> - Form Registrasi
    </div>
  </div>

</body>
</html>
