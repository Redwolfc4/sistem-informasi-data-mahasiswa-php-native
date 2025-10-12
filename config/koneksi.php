<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'db_akademik';

$koneksi = mysqli_connect(
    $host,
    $user,
    $pass,
    $database
);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
