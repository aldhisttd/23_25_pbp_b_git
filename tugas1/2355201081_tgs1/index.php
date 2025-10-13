<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tampilan Form Register</title>
  <style>
    * {box-sizing: border-box; margin: 0; padding: 0;}
    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: Arial, Helvetica, sans-serif;
      background: linear-gradient(135deg, #e0e7ff, #f3f4f6);
    }
    .card {
      background: #fff;
      border-radius: 14px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      padding: 32px;
      width: 350px;
      text-align: center;
    }
    h1 {
      font-size: 24px;
      color: #1e293b;
      margin-bottom: 10px;
    }
    p {
      font-size: 14px;
      color: #6b7280;
      margin-bottom: 20px;
    }
    .field-placeholder {
      height: 44px;
      border-radius: 10px;
      background: #f1f5f9;
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      padding-left: 12px;
      color: #9ca3af;
      font-size: 15px;
      border: 1px solid #e2e8f0;
    }
    .btn-placeholder {
      height: 46px;
      border-radius: 10px;
      background: #4f46e5;
      color: white;
      font-weight: 600;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 15px;
      box-shadow: 0 6px 15px rgba(79,70,229,0.3);
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Form Registrasi</h1>
    <p>Isi lengkap data!</p>
    <div class="field-placeholder">Nama lengkap</div>
    <div class="field-placeholder">Username</div>
    <div class="field-placeholder">Email</div>
    <div class="btn-placeholder">Daftar</div>
  </div>
</body>
</html>