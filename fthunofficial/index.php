<?php 
session_start();


if( !isset($_SESSION["login"]) ) {

	header("Location: login.php");
	exit;

}



 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Faith Industries</title>
	<link rel="website icon" type="png" href="asset/fth.png">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">

</head>
<body>


<!-- Navbar -->

	<header>
		
		<div class="container-fluid">
			
			<div class="navb-logo">
				<img src="asset/fth.png">
			</div>

			<div class="navb-items">
				<div class="item">
					<a href="index.php">Home</a>
				</div>

				<div class="item">
					<a href="bestseller.php">BestSeller</a>
				</div>

				<div class="item">
					<a href="sell.php">Sale</a>
				</div>

				<div class="item">
					<a href="about.php">About</a>
				</div>


				<div class="item-button">
					<a href="logout.php" type="submit">Log Out</a>
				</div>
			</div>


		<!-- Button trigger modal -->
		<div class="mobile-toggler d-lg-none">
			<a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
				<i class="fa-solid fa-bars"></i>
			</a>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">

		      <div class="modal-header">
		        <img src="asset/fth.png" alt="Logo">
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
		      </div>
		      <div class="modal-body">
		        
		        <div class="modal-line">
		        	<i class="fa-solid fa-house"></i><a href="index.php">Home</a>
		        </div>

		        <div class="modal-line">
		        	<i class="fa-solid fa-address-card"></i><a href="bestseller.php">BestSeller</a>
		        </div>

		        <div class="modal-line">
		        	<i class="fa-solid fa-user"></i><a href="sell.php">Sell</a>
		        </div>

		        <div class="modal-line">
		        	<i class="fa-solid fa-circle-info"></i><a href="about.php">About</a>
		        </div>

		        <a href="logout.php" class="navb-button" type="submit">Log Out</a>

		      </div>
		      <div class="mobile-modal-footer">
		        
		        <a target="_blank" href="#"><i class="fa-brands fa-facebook-f"></i></a>
		        <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
		        <a target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a>

		      </div>
		    </div>
		  </div>
		</div>

		</div>

	</header>

<!-- Akhir Navbar -->

<!-- Hero Section awal -->

		<section class="hero" id="home">
			<main class="content">
				<h1>Ayo Beli Baju Dengan Gaya keren, hanya di <span>FTH.ind</span></h1>
				<p>Faith Industries menjual baju dengan bergayakan Jejepangan, dan ke barat-baratan. Tunggu apa lagi ayo beli!</p>
				<a href="sell.php" class="cta">Beli Sekarang</a>
			</main>
		</section>

<!-- Hero Section akhir -->












	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>