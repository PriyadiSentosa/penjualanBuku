<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<link rel="stylesheet" href="../hal.css">
<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html">PRIYADI </a></h1>
			<ul>
				<li class="active"><a href="../hal.php">HOME</a></li>
				<li><a href="../pembeli/">BELI</a></li>
				<li><a href="buku/">BUKU</a></li>
				<li><a href="../contact.php">CONTACT</a></li>
				<li><a href="../login.php">LOGOUT</a></li>
			</ul>
		</div>
	</header>
    <link rel="stylesheet" href="hal.css">
    <center>
        <nav>
            <a href="/dosen">Data Buku</a> |
            <a href="/mahasiswa">Data pembeli</a>
        </nav>
    </center>
    <center>Data Buku</center>
        <legend>Data Buku</legend>
        <a href="create.php">Tambah Data Buku</a>
      <center>  <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Harga Buku</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../sql.php';
$daftar = new query();
$no = 1;
// var_dump($daftar->index());
foreach ($daftar->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['harga_buku']; ?></td>
                    <td><?php echo $data['nama_buku']; ?></td>
                    <td>
                        <a href="show.php?id_buku=<?php echo $data['id_buku']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id_buku=<?php echo $data['id_buku']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
</center>
            <?php
}
?>
    </fieldset>
</body>

</html>