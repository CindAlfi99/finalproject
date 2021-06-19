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

		<div class="row mt-5">
			<div class="col-md-6"><img src="<?php echo BASE_URL; ?>asset/img/carpet.png" width="300" heigth="100" alt=""></div>
			<div class="col-md-6">
				<h3>Apa itu Laundry Karpet ?</h3>
				<p>Layanan <i>Laundry</i> karpet merupakan layanan khusus laundry karpet yang proses dan transaksinya dilakukan dengan menghitung luas meter karpet customer. Proses laundry menggunakan mesin khusus karpet sehingga bisa dipastikan kebersihannya satuan merupakan penanganan laundry khusus dan didukung oleh operator mesin yang terlatih dan berpengalaman.</p><br>
				Kelebihan :<br>
				<h4><img src="<?php echo BASE_URL; ?>asset/img/point.png" width="20" height="20"> 1 Item per Proses</h4>
				<p>Pengerjaan 1 item setiap per proses, sehingga penanganan premium.</p>
				<h4><img src="<?php echo BASE_URL; ?>asset/img/point.png" width="20" height="20"> Mesin Khusus</h4>
				<p>Pengerjaan awalnya dilakukan secara manual, kemudian akan dilanjutkan dengan pengerjaan proses laundry menggunakan mesin khusus untuk karpet.</p>
				<a href="order.php" class="btn btn-lg btn-warning btn-order text-white">Pesan Sekarang!</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-11">
				<h3 class="text-center font-weight-bold mt-5">Price List Laundry Karpet</h3>
			</div>
		</div>
		<div class="row mt-5 text-center">
			<!-- harga 1 -->
			<div class="col-md-3 m-4">
				<img src="<?php echo BASE_URL; ?>asset/img/rupiah.png" width="30" height="30">
				<span style="font-size:50px;"> 20.000</span> /kg
				<hr>
				<p>Karpet Bulu (Meter 2)</p>
				<p>Etimasi selesai: 6 Hari</p> <br>
				<button type="button" class="btn btn-outline-primary mt-5 rounded-pill p-2">Pesan Laundry</button>
			</div>
			<!-- harga 2 -->
			<div class="col-md-3 m-4">
				<img src="<?php echo BASE_URL; ?>asset/img/rupiah.png" width="30" height="30">
				<span style="font-size:50px;"> 10.000</span> /kg
				<hr>
				<p>Karpet Tebal (Meter 2)</p>Etimasi selesai: 6 Hari <br>
				<button type="button" class="btn btn-outline-primary mt-5 rounded-pill p-2">Pesan Laundry</button>
			</div>
			<!-- harga 3 -->
			<div class="col-md-3 m-4">
				<img src="<?php echo BASE_URL; ?>asset/img/rupiah.png" width="30" height="30">
				<span style="font-size:50px;"> 15.000</span> /kg
				<hr>
				<p>Karpet Tipis</p>Etimasi selesai: 5 Hari <br>
				<button type="button" class="btn btn-outline-primary mt-5 p-2 rounded-pill">Pesan Laundry</button>
			</div>
			<!-- harga 4 -->
			<div class="col-md-3 m-4">
				<img src="<?php echo BASE_URL; ?>asset/img/rupiah.png" width="30" height="30">
				<span style="font-size:50px;"> 17.000</span> /kg
				<hr>Etimasi selesai: 6 Jam <br>
				<button type="button" class="btn btn-outline-primary mt-5 rounded-pill p-2">Pesan Laundry</button>
			</div>
		</div>
		<!-- batas -->
	</div>
	<!-- footer -->
	<?php require $_SERVER['DOCUMENT_ROOT'] . '/rl381/template/footer.php'; ?>
	<!-- batas -->
</body>

</html>