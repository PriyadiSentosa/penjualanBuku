<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
include '../sql.php';
$daftar = new query();
foreach ($daftar->show($_GET['id_buku']) as $data) {
    $id_buku = $data['id_buku'];
    $nama_buku = $data['nama_buku'];
    $harga_buku = $data['harga_buku'];
}
?>
    <fieldset>
        <legend>Show Data Buku</legend>
        <table>
            <tr>
                <th>Nama Buku</th>
                <td><input type="number" name="nama_buku" value="<?php echo $nama_buku; ?>" readonly></td>
            </tr>
            <tr>
                <th>Harga Buku</th>
                <td><input type="text" name="harga_buku" value="<?php echo $harga_buku; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>