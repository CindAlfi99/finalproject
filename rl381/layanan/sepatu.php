<!doctype html>
<html lang="en">

<?php require $_SERVER['DOCUMENT_ROOT'] . '/rl381/template/header.php'; ?>

<body>
	<?php require $_SERVER['DOCUMENT_ROOT'] . '/rl381/template/navbar.php'; ?>
	<div class="container pt-5 my-5">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo BASE_URL; ?>asset/img/slide.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Some representative placeholder content for the first slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo BASE_URL; ?>asset/img/slide.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Some representative placeholder content for the second slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo BASE_URL; ?>asset/img/slide.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Some representative placeholder content for the third slide.</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- batas -->
		<!-- batas slideshow -->
		<div class="row mt-5">
			<div class="col-md-6"><img src="<?php echo BASE_URL; ?>asset/img/running.png" width="300" heigth="100" alt=""></div>
			<div class="col-md-6">
				<h3>Apa itu Laundry Shoes ?</h3>
				<p>Layanan <i>Laundry</i> Shoes merupakan jenis pelayanan laundry yang dikhususkan untuk pelayanan kebersihan dan perawatan Sepatu.Dan berfokus pada 2 kategori layanan, yaitu <i>Fast Clean<i> dan <i>Deep Clean.</i></p><br>
				<h3>Kategori Pelayanan :</h3>
				<!-- tombol collapse -->
				<p>
					<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Fast Clean</button>
					<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Deep Clean</button>
				</p>
				<div class="row">
					<div class="col">
						<div class="collapse multi-collapse" id="multiCollapseExample1">
							<div class="card card-body">
								Fast Clean merupakan servis cuci sepatu yang dibersihkan hanya bagian – bagian luar seperti Tongue, Lace, Upper , dan Midsole. Cocok untuk kamu yang tidak ingin menunggu lama . Biasanya untuk kategori Fast Clean maksimal selesai dalam 1 hari.
							</div>
						</div>
					</div>
					<div class="col">
						<div class="collapse multi-collapse" id="multiCollapseExample2">
							<div class="card card-body">
								Deep Clean adalah servis cuci sepatu yang seluruh bagian luar dan dalam dicuci kemudian dibersihkan. Bagian – bagian yang dicuci dikategori Deep Clean ini yaitu bagian Outsole, Midsole, Upper , Insole , Lace , dan Tongue. Servis ini cocok untuk pemilik sepatu yang ingin sepatunya bersih luar dan dalam dan bisa menunggu maksimal sekitar 4 hari. </div>
						</div>
					</div>
				</div>
				<!-- batas -->
				<a href="order.php" class="btn btn-lg btn-warning btn-order text-white">Pesan Sekarang!</a>
			</div>
		</div>

		<!-- daftar harga -->
		<div class="row mt-5 text-center">
			<div class="col-md-12">
				<h3 class="font-weight-bold mt-5 mb-5">List Harga Laundry Shoes</h3>
			</div>
			<!-- card -->
			<div class="row mx-auto">
				<div class="col-md-6 mb-2 mb-md-0">
					<div class="card">
						<img src="<?php echo BASE_URL; ?>asset/img/running.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Fast Clean</h5>
							<p class="card-text"><img src="<?php echo BASE_URL; ?>asset/img/rupiah.png" width="30" height="30"><span style="font-size:50px;"> 25.000</span><br>Etimasi Pengerjaan: 1 Hari</p>
							<a href="#" class="btn btn-outline-primary p-2  rounded-pill">Pesan Luandy</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<img src="<?php echo BASE_URL; ?>asset/img/running.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Deep Clean</h5>
							<p class="card-text"><img src="<?php echo BASE_URL; ?>asset/img/rupiah.png" width="30" height="30"><span style="font-size:50px;"> 35.000</span><br>Etimasi Pengerjaan: 4 Hari</p>
							<a href="#" class="btn btn-outline-primary p-2  rounded-pill">Pesan Laundry</a>
						</div>
					</div>
				</div>
			</div>
			<!-- batas -->
		</div>
	</div>
	<!-- footer -->
	<?php require $_SERVER['DOCUMENT_ROOT'] . '/rl381/template/footer.php'; ?>
	<!-- batas -->
</body>

</html>
