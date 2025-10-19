<?php
require_once 'config.php';

$action = $_REQUEST['action'] ?? '';
$redirect = 'form_kendaraan.php';

if ($action === 'add' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $brand = trim($_POST['brand']);
    $merk  = trim($_POST['merk']);
    $cc    = intval($_POST['cc']);
    $harga = intval($_POST['harga']);

    if ($brand === '' || $merk === '' || $cc <= 0 || $harga <= 0) {
        header("Location: $redirect?msg=" . urlencode('Data tidak valid!'));
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO kendaraan (brand, merk, cc, harga) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssii", $brand, $merk, $cc, $harga);

    if ($stmt->execute()) {
        header("Location: $redirect?msg=" . urlencode('Data berhasil disimpan.'));
    } else {
        header("Location: $redirect?msg=" . urlencode('Gagal menyimpan data.'));
    }
    exit;
}

if ($action === 'delete' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("DELETE FROM kendaraan WHERE id_kendaraan = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: data_motor.php?msg=" . urlencode('Data berhasil dihapus.'));
    exit;
}

header("Location: $redirect");
exit;
