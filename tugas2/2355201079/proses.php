<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $kamar = htmlspecialchars($_POST['kamar']);
    $lama_sewa = (int)$_POST['lama_sewa'];
    $harga = (int)$_POST['harga'];
    $status = htmlspecialchars($_POST['status']);
    
    // Hitung total
    $total = $lama_sewa * $harga;
    
    // Format data untuk disimpan
    $data = array(
        'nama' => $nama,
        'kamar' => $kamar,
        'lama_sewa' => $lama_sewa,
        'harga' => $harga,
        'total' => $total,
        'status' => $status,
        'tanggal_input' => date('Y-m-d H:i:s')
    );
    
    // Baca data existing
    $filename = 'data_kost.json';
    $existing_data = array();
    
    if (file_exists($filename)) {
        $existing_data = json_decode(file_get_contents($filename), true);
        if (!is_array($existing_data)) {
            $existing_data = array();
        }
    }
    
    // Tambah data baru
    $existing_data[] = $data;
    
    // Simpan ke file JSON
    file_put_contents($filename, json_encode($existing_data, JSON_PRETTY_PRINT));
    
    // Tampilkan konfirmasi
    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <title>Data Tersimpan - 2355201079</title>
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
            .success-icon {
                font-size: 4em;
                margin-bottom: 20px;
            }
            h1 {
                color: #28a745;
                margin-bottom: 20px;
            }
            .data-detail {
                text-align: left;
                background: #f8f9fa;
                padding: 20px;
                border-radius: 10px;
                margin: 20px 0;
            }
            .btn {
                display: inline-block;
                padding: 12px 24px;
                background: #007bff;
                color: white;
                text-decoration: none;
                border-radius: 8px;
                margin: 5px;
                transition: background 0.3s;
            }
            .btn:hover {
                background: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='success-icon'>✅</div>
            <h1>Data Berhasil Disimpan!</h1>
            
            <div class='data-detail'>
                <p><strong>Nama:</strong> $nama</p>
                <p><strong>Kamar:</strong> $kamar</p>
                <p><strong>Lama Sewa:</strong> $lama_sewa bulan</p>
                <p><strong>Harga per Bulan:</strong> Rp " . number_format($harga) . "</p>
                <p><strong>Total:</strong> Rp " . number_format($total) . "</p>
                <p><strong>Status:</strong> $status</p>
            </div>
            
            <a class='btn' href='form_input.php'>📝 Input Data Lagi</a>
            <a class='btn' href='data.php'>📊 Lihat Semua Data</a>
            <a class='btn' href='index.php'>🏠 Menu Utama</a>
        </div>
    </body>
    </html>";
} else {
    // Jika bukan method POST, redirect ke form
    header("Location: form_input.php");
    exit();
}
?>