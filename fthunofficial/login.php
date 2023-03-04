<?php 

session_start();

if( isset($_SESSION["login"]) ) {

	header("Location: index.php");
	exit;

}


require 'functions.php';

	if( isset($_POST["login"])) {


		$username = $_POST["username"];
		$password = $_POST["password"];


	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");


	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);

		if( password_verify($password, $row["password"] )){

			// set session

			$_SESSION["login"] = true;

			header("Location: index.php");
			exit;

		}

	}

	$result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");


	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);

		if( password_verify($password, $row["password"] )){

			// set session

			$_SESSION["login"] = true;

			header("Location: tambah.php");
			exit;

		}

	}

	


	$error = true;


	}



 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
	<link rel="website icon" type="png" href="asset/fth.png">
	<link rel="stylesheet" href="css/style-LOGREG.css">

</head>
<body>


		
		<div class="container">
			<input type="checkbox" name="check" id="check">
			<div class="login form">
				<header>Form Login</header>
				<form action="" method="post">
					<input type="text" name="username" id="username" placeholder="Masukan Username">
					<input type="password" name="password" id="password" placeholder="Masukan Password">
					<?php if(isset($error)) : ?>
					<p style="color: red; font-size: 13px;">Username / Password anda salah!</p>
					<?php endif; ?>
					<input type="submit" class="button" name="login" value="LOGIN" >
				</form>
				<div class="singup">
					<span class="singup">Belum punya akun?
					<label for="check"><a href="register.php">Daftar</label>
					</span>
				</div>
			</div>
		</div>


</body>
</html>