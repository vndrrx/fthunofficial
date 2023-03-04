<?php 
session_start();


if( !isset($_SESSION["login"]) ) {

	header("Location: tambah.php");
	exit;

}

require 'functions.php';


// cek apakah tombol submit sudah diteken atau belum
if( isset($_POST["submit"]) ){






	// cek apakah data berhasil dikirim
	if( tambah($_POST) > 0 ) {
		echo "
				<script>

					alert('data berhasil ditambahkan!');
					document.location.href = 'tambah.php';

				</script>
				";
	} else {
		echo "
				<script>

					alert('data gagal ditambahkan!');
					document.location.href = 'index.php';

				</script>
				";
	}

}


 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrasi Form</title>
	<link rel="website icon" type="png" href="asset/fth.png">
	<link rel="stylesheet" href="css/style-tmbh.css">
</head>
<body>

		<div class="container">
			<input type="checkbox" name="check" id="check">
			<div class="login form">
				<header>Nambah Barang</header>
				<form action="" method="post" enctype="multipart/form-data">
					<input type="text" name="nama" id="nama" placeholder="Nama Barang" required>
					<input type="text" name="harga_barang" id="harga_barang" placeholder="Harga Barang" required>
					<input type="file" class="button-box" name="gambar" id="gambar">
					
					<input type="submit" class="button" name="submit" value="TAMBAH" >
				</form>
				<div class="singup">
					<span class="singup">Sudah semua ditambahkan?
					<label for="check"><a href="logout.php">Log Out?</label>
					</span>
				</div>

			</div>
		</div>

</body>
</html>