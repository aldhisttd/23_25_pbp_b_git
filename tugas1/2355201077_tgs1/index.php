<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Register - Alya Febi Ayu</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #74b9ff, #a29bfe);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }

    .register-container {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255,255,255,0.3);
      padding: 40px 45px;
      border-radius: 20px;
      box-shadow: 0 15px 25px rgba(0,0,0,0.2);
      width: 360px;
      animation: fadeIn 0.8s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .register-container h2 {
      text-align: center;
      color: #2d3436;
      margin-bottom: 30px;
      font-weight: 600;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      color: #2d3436;
      font-size: 14px;
      font-weight: 500;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 10px 12px;
      border: none;
      border-radius: 8px;
      outline: none;
      background: rgba(255,255,255,0.9);
      font-size: 14px;
      transition: all 0.3s ease;
    }

    input:focus {
      background: #fff;
      box-shadow: 0 0 8px rgba(9,132,227,0.3);
      transform: scale(1.02);
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 10px;
      background: linear-gradient(135deg, #0984e3, #6c5ce7);
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      transform: translateY(-2px);
      background: linear-gradient(135deg, #74b9ff, #a29bfe);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    /* Footer kecil */
    .footer {
      text-align: center;
      font-size: 12px;
      color: #2d3436;
      margin-top: 15px;
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h2>Form Register</h2>
    <form method="post" action="">
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Masukkan username" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email" required>
      </div>
      <button type="submit">Daftar</button>
    </form>
    <div class="footer">© 2025 - Alya Febi Ayu</div>
  </div>
</body>
</html>
