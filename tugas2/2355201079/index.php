<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Data Kost - 2355201079</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            padding: 40px;
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
            font-size: 2.5em;
        }
        .subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1em;
        }
        .menu-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 30px;
        }
        .menu-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 30px 20px;
            text-decoration: none;
            color: #333;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            border-color: #667eea;
            background: white;
        }
        .menu-icon {
            font-size: 3em;
            margin-bottom: 15px;
        }
        .menu-title {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .menu-desc {
            font-size: 0.9em;
            color: #666;
        }
        .nim {
            margin-top: 30px;
            padding: 10px;
            background: #f1f3f4;
            border-radius: 10px;
            color: #666;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🏠 Sistem Data Kost</h1>
        <p class="subtitle">Kelola data penyewa kost dengan mudah dan efisien</p>
        
        <div class="menu-grid">
            <a href="form_input.php" class="menu-card">
                <div class="menu-icon">📝</div>
                <div class="menu-title">Tambah Data</div>
                <div class="menu-desc">Input data penyewa baru</div>
            </a>
            
            <a href="data.php" class="menu-card">
                <div class="menu-icon">📊</div>
                <div class="menu-title">Lihat Data</div>
                <div class="menu-desc">Tampilkan semua data</div>
            </a>
        </div>
        
        <div class="nim">
            NIM: 2355201079
        </div>
    </div>
</body>
</html>