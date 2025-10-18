<?php
require_once('config/koneksi.php');

// ambil seluruh data updatenya
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];

$query = 'select * from mahasiswa where id = ' . $id;
$result = mysqli_query($koneksi, $query);
$get_data_id = mysqli_fetch_assoc($result);
if (
    ($get_data_id['id'] == $id) &&
    ($get_data_id['nama'] == $nama) &&
    ($get_data_id['jurusan'] == $jurusan) &&
    ($get_data_id['nim'] == $nim)
) {
    header('Location: index.php');
    exit;
}

// buat query proses update
try {
    $query = "update mahasiswa set nama = '$nama', nim = '$nim', jurusan = '$jurusan' where id = $id";
    $result = mysqli_query($koneksi, $query);

    // kondisi berhasil atau gagal
    if ($result) {
        header('Location: index.php?success=data berhasil diupdate');
        exit;
    } else {
        throw new Exception('Data gagal diupdate', 500);
    }
} catch (\Exception $e) {
    header('Location: edit.php?error=data gagal diupdate');
    exit;
}
