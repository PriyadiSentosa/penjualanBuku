<?php
include '../sql.php';
$pembeli = new query();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    if ($aksi == "create") {
        $pembeli->Buat($nama, $jenis_kelamin, $alamat, $telepon);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $pembeli->Apdet( $nama, $jenis_kelamin, $alamat, $telepon);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $pembeli->hapus($id);
        header("location:index.php");
    }

}
?>