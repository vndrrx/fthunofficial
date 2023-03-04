<?php 
session_start();

if( isset($_SESSION["login"]) ) {

	header("Location: index.php");
	exit;

}

require 'functions.php';

if ( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {

		echo "<script>
						alert('User baru berhasil ditambahkan!');
			</script>";

	} else {
		echo mysqli_error($conn);
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
	<link rel="stylesheet" href="css/style-LOGREG.css">
	
</head>
<body>

		<div class="container">
			<input type="checkbox" name="check" id="check">
			<div class="login form">
				<header>Form Registration</header>
				<form action="" method="post">
					<input type="text" name="username" id="username" placeholder="Masukan Username">
					<input type="password" name="password" id="password2" placeholder="Masukan Password">
					<input type="password" name="password2" id="password2" placeholder="Konfirmasi Password">
					
					<input type="submit" class="button" name="register" value="REGISTER" >
				</form>
				<div class="singup">
					<span class="singup">Sudah punya akun?
					<label for="check"><a href="login.php">Login</a></label>
					</span>
				</div>
			</div>
		</div>

</body>
</html>