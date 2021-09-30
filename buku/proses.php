<?php
include '../sql.php';
$daftar = new query();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id_buku = @$_POST['id_buku'];
    $nama_buku = $_POST['nama_buku'];
    $harga_buku = $_POST['harga_buku'];

    if ($aksi == "create") {
        $daftar->create($nama_buku, $harga_buku);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $daftar->update($id_buku, $nama_buku, $harga_buku);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $daftar->delete($id_buku);
        header("location:index.php");
    }

}