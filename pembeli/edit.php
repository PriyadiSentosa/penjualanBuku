<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../sql.php';
$pembeli = new query();
foreach ($pembeli->Ubah($_GET['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];
    $telepon = $data['telepon'];
}
?>
    <fieldset>
        <legend>Edit Data Pembeli</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="text" name="alamat" value="<?php echo $alamat; ?>" required></td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td><input type="text" name="telepon" value="<?php echo $telepon; ?>" required></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>