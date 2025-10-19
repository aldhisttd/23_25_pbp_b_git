<?php
if (!isset($_POST['submit'])) {
    header('Location: form_pembelian.php');
    exit();
}


$host = "localhost";
$user = "root";
$pass = "";
$db   = "bioskop"; 
$konek = mysqli_connect($host, $user, $pass, $db);
if (!$konek) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


$judul_film = $_POST['judul_film'];
$jam_tayang = $_POST['jam_tayang'];
$kursi = $_POST['kursi'];
$metode = $_POST['metode_pembayaran'];
$tanggal = $_POST['tanggal_pembelian'];
$studio = $_POST['studio'];
$jumlah = $_POST['jumlah_tiket'];
$harga = $_POST['harga_tiket'];

$sql = "INSERT INTO film
        (judul_film, jam_tayang, kursi, metode_pembayaran, tanggal_pembelian, studio, jumlah_tiket, harga_tiket)
        VALUES ('$judul_film', '$jam_tayang', '$kursi', '$metode', '$tanggal', '$studio', '$jumlah', '$harga')";

if (mysqli_query($konek, $sql)) {
    echo "<script>
        alert('✅ Tiket berhasil dipesan!');
        window.location.href='datafilm.php';
    </script>";
} else {
    echo "❌ Error: " . mysqli_error($konek);
}

mysqli_close($konek);
?>
