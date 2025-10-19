<?php
// UBAH sesuai environment kamu:
$DB_HOST = 'localhost';   // gunakan localhost
$DB_PORT = '3306';        // ubah ke 3307 kalau di my.ini port=3307
$DB_USER = 'root';
$DB_PASS = '';            // default XAMPP: kosong
$DB_NAME = 'data_buku';

$koneksi = mysqli_init();
mysqli_options($koneksi, MYSQLI_OPT_CONNECT_TIMEOUT, 5);

if (!mysqli_real_connect($koneksi, $DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, (int)$DB_PORT)) {
  die('Koneksi gagal: ' . mysqli_connect_error());
}

mysqli_set_charset($koneksi, 'utf8mb4');
