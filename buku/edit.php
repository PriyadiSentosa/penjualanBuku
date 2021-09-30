<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penjualan Buku - Edit Data</title>
</head>

<body>
    <?php
include '../sql.php';
$daftar = new query();
foreach ($daftar->edit($_GET['id_buku']) as $data) {
    $id_buku = $data['id_buku'];
    $nama_buku = $data['nama_buku'];
    $harga_buku = $data['harga_buku'];
}
?>
    <fieldset>
        <legend>Edit Data Buku</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id_buku" value="<?php echo $id_buku; ?>">
            <table>
                <tr>
                    <th>Nama Buku</th>
                    <td><input type="text" name="nama_buku" value="<?php echo $nama_buku; ?>" required></td>
                </tr>
                <tr>
                    <th>Harga Buku</th>
                    <td><input type="number" name="harga_buku" value="<?php echo $harga_buku; ?>" required></td>
                </tr>

                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>