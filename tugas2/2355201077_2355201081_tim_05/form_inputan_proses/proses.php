<?php
include 'koneksi.php'; // pastikan path sesuai

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? '';
    $tujuan = $_POST['tujuan'] ?? '';
    $tanggal = $_POST['tanggal'] ?? '';
    $jumlah = $_POST['jumlah'] ?? 0;
    $harga = $_POST['harga'] ?? 0;
    $total = $jumlah * $harga;

    $sql = "INSERT INTO tiket_bus (nama, tujuan, tanggal, jumlah, harga, total)
            VALUES ('$nama', '$tujuan', '$tanggal', '$jumlah', '$harga', '$total')";

    if ($conn->query($sql) === TRUE) {
        echo "<div style='text-align:center;margin-top:50px;font-family:sans-serif;'>
                <h2 style='color:green;'>Pemesanan Berhasil!</h2>
                <p>Data tiket untuk <strong>$nama</strong> dengan tujuan <strong>$tujuan</strong> telah disimpan.</p>
                <p>Total Pembayaran: Rp$total</p>
                <a href='index.php' class='btn btn-primary mt-3'>Kembali ke Form</a>
              </div>";
    } else {
        echo "<h3 style='color:red;text-align:center;'>Error: " . $conn->error . "</h3>";
    }

    $conn->close();
} 
?>
