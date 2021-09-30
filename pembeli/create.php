<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Priyadi</title>
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
				<li class="active"><a href="hal.php">HOME</a></li>
				<li><a href="pembeli/">BELI</a></li>
				<li><a href="buku/">BUKU</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="../.php">LOGOUT</a></li>
			</ul>
		</div>
	</header>
    <fieldset>
        <legend>Input Data Pembeli</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                    <th>Nama Pembeli</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="text" name="jenis_kelamin" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="text" name="alamat" required></td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td><input type="text" name="telepon" required></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>