<?php
include "koneksi.php";

// ========== Tambah Data ==========
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_destinasi'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];

    $query = mysqli_query($koneksi, "INSERT INTO wisata (nama_destinasi, alamat, kontak)
                                    VALUES ('$nama', '$alamat', '$kontak')");
    if ($query) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='data.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data!'); window.location='data.php';</script>";
    }
}

// ========== Update Data ==========
elseif (isset($_POST['update'])) {
    $id = $_POST['id_destinasi'];
    $nama = $_POST['nama_destinasi'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];

    $query = mysqli_query($koneksi, "UPDATE wisata 
                                    SET nama_destinasi='$nama', alamat='$alamat', kontak='$kontak'
                                    WHERE id_destinasi='$id'");
    if ($query) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='data.php';</script>";
    } else {
        echo "<script>alert('Gagal update data!'); window.location='data.php';</script>";
    }
}

// ========== Hapus Data ==========
elseif (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = mysqli_query($koneksi, "DELETE FROM wisata WHERE id_destinasi='$id'");
    if ($query) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='data.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data!'); window.location='data.php';</script>";
    }
}

else {
    header("Location: data.php");
}
?>
