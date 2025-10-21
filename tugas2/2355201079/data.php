<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kost - 2355201079</title>
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
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            padding: 40px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        h1 {
            color: #333;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            background: #007bff;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            margin: 5px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #0056b3;
        }
        .btn-success {
            background: #28a745;
        }
        .btn-success:hover {
            background: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .status-lunas {
            background: #d4edda;
            color: #155724;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.9em;
        }
        .status-belum {
            background: #f8d7da;
            color: #721c24;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.9em;
        }
        .empty {
            text-align: center;
            padding: 40px;
            color: #666;
            font-style: italic;
        }
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
            .btn-group {
                margin-top: 15px;
            }
            table {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📊 Data Penyewa Kost</h1>
            <div class="btn-group">
                <a href="form_input.php" class="btn btn-success">➕ Tambah Data</a>
                <a href="index.php" class="btn">🏠 Menu Utama</a>
            </div>
        </div>

        <?php
        $filename = 'data_kost.json';
        
        if (file_exists($filename) && filesize($filename) > 0) {
            $data = json_decode(file_get_contents($filename), true);
            
            if (!empty($data)) {
                echo '<table>';
                echo '<tr>
                        <th>No</th>
                        <th>Nama Penyewa</th>
                        <th>Kamar</th>
                        <th>Lama Sewa</th>
                        <th>Harga/Bulan</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Tanggal Input</th>
                      </tr>';
                
                $total_penyewa = 0;
                $total_pendapatan = 0;
                
                foreach ($data as $index => $item) {
                    $status_class = $item['status'] == 'Lunas' ? 'status-lunas' : 'status-belum';
                    
                    echo "<tr>";
                    echo "<td>" . ($index + 1) . "</td>";
                    echo "<td>" . htmlspecialchars($item['nama']) . "</td>";
                    echo "<td>" . htmlspecialchars($item['kamar']) . "</td>";
                    echo "<td>" . $item['lama_sewa'] . " bulan</td>";
                    echo "<td>Rp " . number_format($item['harga']) . "</td>";
                    echo "<td>Rp " . number_format($item['total']) . "</td>";
                    echo "<td><span class='$status_class'>" . $item['status'] . "</span></td>";
                    echo "<td>" . $item['tanggal_input'] . "</td>";
                    echo "</tr>";
                    
                    $total_penyewa++;
                    $total_pendapatan += $item['total'];
                }
                
                echo '</table>';
                
                echo "<div style='margin-top: 20px; padding: 15px; background: #e9ecef; border-radius: 10px;'>
                        <strong>Statistik:</strong> 
                        Total Penyewa: $total_penyewa | 
                        Total Pendapatan: Rp " . number_format($total_pendapatan) . "
                      </div>";
            } else {
                echo '<div class="empty">📝 Belum ada data penyewa kost.</div>';
            }
        } else {
            echo '<div class="empty">📝 File data belum ada atau kosong.</div>';
        }
        ?>
    </div>
</body>
</html>