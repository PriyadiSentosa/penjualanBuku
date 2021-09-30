<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
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
				<li><a href="index.php">BELI</a></li>
				<li><a href="../buku/">BUKU</a></li>
				<li><a href="../contact.php">CONTACT</a></li>
				<li><a href="../login.php">LOGOUT</a></li>
			</ul>
		</div>
	</header>

        <a href="../buku/">Buku</a>
        <a href="index.php">Pembeli </a>
        <center>
        <legend>Data Pembeli</legend>
        <a href="create.php">Tambah Data Pembeli</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Pembeli</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../sql.php';
$pembeli = new query();
$no = 1;
// var_dump($dosen->index());
foreach ($pembeli->index1() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['telepon']; ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data['id']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" class="btn btn-primary" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
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