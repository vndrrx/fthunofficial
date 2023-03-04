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
	<link rel="stylesheet" href="css/style-abt.css">

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

<!-- Jumbotron -->

<section class="jumbotron text-center">
	<img src="asset/faith.png" alt="FTH" width="140" class="rounded-circle img-thumbnail">
 	<h1 class="display-4">Faith Industries</h1>
  	<p class="lead">Company | FTH.id</p>
  	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,288L18.5,272C36.9,256,74,224,111,192C147.7,160,185,128,222,133.3C258.5,139,295,181,332,192C369.2,203,406,181,443,176C480,171,517,181,554,160C590.8,139,628,85,665,85.3C701.5,85,738,139,775,149.3C812.3,160,849,128,886,101.3C923.1,75,960,53,997,80C1033.8,107,1071,181,1108,202.7C1144.6,224,1182,192,1218,181.3C1255.4,171,1292,181,1329,160C1366.2,139,1403,85,1422,58.7L1440,32L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"></path></svg>
</section>

<!-- Akhir Jumbotron -->


<!-- About Company -->


	<section id="about">
		<div class="container">
			<div class="row text-center mb-3">
				<div class="col">
					<h2>
						About Company
					</h2>
				</div>
			</div>
			<div class="row justify-content-center fs-5 text-center">
				<div class="col-4">
					<p>Salah satu brand asal Bandung yang ikut meramaikan industri fashion tanah air ialah Faith Industries. Faith Industries mengusung tema pop culture dengan menghadirkan desain yang unik dan berbeda. Dibalik lini belakang fashion ini terdapat dua pria bernama Luthfi Halimawan serta Rizal Malaik.</p>
				</div>
				<div class="col-4">
					<p> Keduanya membangun Faith Industries sejak tahun 2019 melalui proses yang panjang. Riset jadi salah satu hal yang cukup memakan waktu sebelum melaunching produk-produk dari Faith Industries. Sebelum menjalankan usahanya, Luthfi dan Rizal banyak melakukan trial and error.</p>
				</div>
			</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#73777B" fill-opacity="1" d="M0,224L24,229.3C48,235,96,245,144,256C192,267,240,277,288,272C336,267,384,245,432,229.3C480,213,528,203,576,181.3C624,160,672,128,720,144C768,160,816,224,864,234.7C912,245,960,203,1008,208C1056,213,1104,267,1152,293.3C1200,320,1248,320,1296,277.3C1344,235,1392,149,1416,106.7L1440,64L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
	</section>


<!-- Akhir About -->

<!-- Footer -->


	<footer class="footer-end pb-5">
	</footer>


<!-- Akhir Footer -->












	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>