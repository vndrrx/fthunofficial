<?php
session_start();


if( !isset($_SESSION["login"]) ) {

	header("Location: login.php");
	exit;

}

require 'functions.php';

$dbphoto = query( "SELECT * FROM photo" );
$dbbarang = query( "SELECT * FROM barang" );

// tombol cari diteken
if( isset($_POST["cari"]) ){

	$dbbarang = cari($_POST["keyword"]);

}


 ?>




<!DOCTYPE html>
<html >
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
	<link rel="stylesheet" href="css/styleBS.css">

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

<!-- Slider -->

<div class="container">

<div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/img1.png" class="d-block" alt="...">
    </div>
    <?php $i = 1; ?>
	<?php foreach( $dbphoto as $row ) : ?>
    <div class="carousel-item">
      <img src="asset/<?= $row["gambar"]; ?>" class="d-block" alt="...">
    </div>
    <?php $i++; ?>
	<?php endforeach; ?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<!-- Akhir Navbar -->


<!-- Navbar Produk -->

<div class="container mt-5">
	<div class="judul-produk" style="background-color: #232323; padding: 5px 10px;">
		<h5 class="text-center" style="margin-top: 5px; color:#fff;">BEST SELLER</h5>
	</div>
</div>
<!-- Akhir Navbar Produk -->


<!-- Search Engine -->

<form action="" method="post">
<div class="container-box">
	<div class="search-box">
		<div class="search-icon">
			<button type="submit" name="cari" class="boxz"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
					</div>
						<div class="search-input">

	
	<input type="text" name="keyword" autofocus placeholder="Search" autocomplete="off" class="input"> 


		</div>
</form>

			

	</div>
</div>

<!-- Akhir Search Engine -->

<div class="container mt-3">
	<div class="row">
					<?php $i = 1; ?>
			<?php foreach( $dbbarang as $row ) : ?>
		<div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
		<div class="card text-center">
		  <img src="asset/<?= $row["gambar"]; ?>" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h6 class="card-title"><?= $row["nama"] ?></h6>
		    <p class="card-text">Rp. <?= $row["harga_barang"] ?></p>	    
		    <a href="sell.php" type="submit" class="btn btn-dark d-grid">Check Out</a>
		  </div>
		</div>

		</div>
				<?php $i++; ?>
				<?php endforeach; ?>
	</div>

</div>












	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>