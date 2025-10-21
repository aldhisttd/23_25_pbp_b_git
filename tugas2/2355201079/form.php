<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Kost - 2355201079</title>
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
            padding: 40px 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            padding: 40px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
        }
        .back-btn {
            display: inline-flex;
            align-items: center;
            background: #6c757d;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            margin-bottom: 20px;
            transition: background 0.3s;
        }
        .back-btn:hover {
            background: #5a6268;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        input, select {
            width: 100%;
            padding: 12px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        input:focus, select:focus {
            outline: none;
            border-color: #667eea;
        }
        .btn-submit {
            background: #28a745;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s;
        }
        .btn-submit:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="index.php" class="back-btn">← Kembali ke Menu Utama</a>
        
        <div class="header">
            <h1>📝 Form Input Data Kost</h1>
            <p>Isi data penyewa kost dengan lengkap</p>
        </div>

        <form action="proses_input.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama Penyewa:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="form-group">
                <label for="kamar">Nomor Kamar:</label>
                <input type="text" id="kamar" name="kamar" placeholder="Contoh: A-101, B-205" required>
            </div>

            <div class="form-group">
                <label for="lama_sewa">Lama Sewa (bulan):</label>
                <input type="number" id="lama_sewa" name="lama_sewa" min="1" placeholder="Contoh: 6" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga per Bulan:</label>
                <input type="number" id="harga" name="harga" min="0" placeholder="Contoh: 1500000" required>
            </div>

            <div class="form-group">
                <label for="status">Status Pembayaran:</label>
                <select id="status" name="status" required>
                    <option value="">Pilih Status</option>
                    <option value="Lunas">Lunas</option>
                    <option value="Belum Lunas">Belum Lunas</option>
                </select>
            </div>

            <button type="submit" class="btn-submit">💾 Simpan Data</button>
        </form>
    </div>
</body>
</html>