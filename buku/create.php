<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location : index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Priyadi Sentosa</title>
	<link rel="stylesheet" type="text/css" href="hal.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>

	<!-- header -->
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
                <li><a href="index.php">BUKU</a></li>
				<li><a href="../pembeli/">BELI</a></li>
				<li><a href="../contact.php">CONTACT</a></li>
				<li><a href="../login.php">LOGOUT</a></li>
			</ul>
		</div>
	</header>

	<!-- about -->
	<section class="about">
		<center><table><div>
        <legend><b><h2>Input Daftar Buku</h2></b></legend><br>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <td><th>Nama Buku</th></td>
					<td> : </td>
                    <td><input type="text" name="nama_buku" required></td>
                </tr>
                <tr>
                    <td><th>Harga Buku </th></td>
					<td> : </td>
                    <td><input type="text" name="harga_buku" required></td>
                </tr>
               <center><tr>
					<td>
                    <th><br>
                        <button style="background-color: green;" type="submit" name="save" >Save </button>
                    </th>
				</td>
                </tr></center> 
            </table>
        </form>
		</div></table></center>
	</section>


	<!-- footer -->
	<footer>
		<div class="container">
			<small>priyadisentosa825@gmail.com- 2021 - Priyadi  Sentosa . All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>