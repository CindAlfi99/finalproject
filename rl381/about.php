<!doctype html>
<html lang="en">

<?php require 'template/header.php'; ?>

<body>
	<?php require 'template/navbar.php'; ?>

	<div class="container pt-5 mt-5">
		<div class="row">
			<div class="col-md-12">
				<h2 class="h3">Tentang Kami</h2>
				<p>Rumah Laundry mulai merintis bisnis ini pada tahun 2017 dengan layanan pertama yaitu <em>Laundry</em> Kiloan dan satuan.</p>
				<p>Pada tahun 2018 layanan Rumah Laundry 381 bertambah membuka layanan Laundry Karpet dan bedcover.</p>
				<p>Di tahun 2019 Rumah Laundry 381 mulai menambahkan lagi layanan Laundry Shoes yang layanannya dikhususkan untuk membersihkan dan merawat sepatu customer sampai saat ini.</p>
				<p>Rumah Laundry 381 memiliki fitur dan sistem yang terintergrasi secara <em>online</em> dan sangat memprioritaskan kemudahan konsumen dalam menggunakan jasa dan fitur kami sepraktis mungkin. Serta berfokus pada kebutuhan dan kepuasaan pelanggan ketika menggunakan jasa Laundry kami.</p>
			</div>
			<!-- <div class="col-md-6 d-flex justify-content-center">
				<img class="img-banner" src="<?php echo BASE_URL; ?>asset/img/logo.png" alt="RL381 Logo">
			</div> -->
		</div>
		<hr>
		<!-- misi dan visi laundry -->
		<div class="row mt-3">
			<div class="col-md-12">
				<h3 class="h3">Visi</h3>
				<blockquote class="blockquote">
					Menjadi perusahaan besar bidang jasa pencucian pakaian yang berorientasi pada kepuasan pelanggan.
				</blockquote>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-12">
				<h3 class="h3">Misi</h3>
				<ol class="ml-3">
					<li>Menyediakan Layanan yang cepat serta teknologi yang praktis untuk kebutuhan customer sehari-hari.</li>
					<li>Memberikan pengalaman terbaik demi mencapai Kepuasan Customer kami.</li>
					<li>Menjadi Brand yang bisa diandalkan bagi masyarakat indonesia.</li>
				</ol>
			</div>
		</div>
		<!-- batas -->
		<!-- layanan laundry -->

		<div class="row mt-3">
			<div class="col-md-12 text-center">
				<h3 class="text-center mb-3 h3">Layanan Rumah Laundry 381</h3>
				<p>Rumah Laundry 381 Memiliki beberapa fitur layanan yang dapat memenuhi kebutuhan anda.</p>
			</div>
		</div>

		<div class="row text-center mb-5">
			<div class="col-md-3 mb-2 mb-md-0">
				<div class="card about-card">
					<div class="card-body" style="height: 100%;">
						<img src="<?php echo BASE_URL; ?>asset/img/scale.png" class="img-fluid bg-primary rounded-circle" alt="">
						<p>Laundry Kiloan</p>
						<p class="mb-4"><em>Laundry</em> kiloan merupakan layanan laundry yang pakaian yang proses dan transaksinya dilakukan dengan menghitung berat item laundry dari pakaian customer.</p>
						<a href="<?php echo BASE_URL; ?>layanan/kiloan.php" class="btn btn-outline-primary">Detail</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 mb-2 mb-md-0">
				<div class="card about-card">
					<div class="card-body">
						<img src="<?php echo BASE_URL; ?>asset/img/tshirt.png" class="img-fluid bg-primary rounded-circle" alt="">
						<p>Laundry Satuan</p>
						<p class="mb-4"><em>Laundry</em> satuan merupakan penanganan laundry khusus, dikerjakan secara manual dan satu per satu akan ditangani oleh ahlinya.</p>
						<a href="<?php echo BASE_URL; ?>layanan/satuan.php" class="btn btn-outline-primary">Detail</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 mb-2 mb-md-0">
				<div class="card about-card">
					<div class="card-body">
						<img src="<?php echo BASE_URL; ?>asset/img/carpet.png" class="img-fluid bg-primary rounded-circle" alt="">
						<p>Laundry Karpet</p>
						<p class="mb-4">Layanan <em>Laundry</em> Karpet diproses dengan menggunakan mesin khusus sehingga bisa dipastikan kebersihannya satuan merupakan penanganan laundry khusus, dikerjakan secara manual dan satu per satu akan ditangani oleh ahlinya.</p>
						<a href="<?php echo BASE_URL; ?>layanan/karpet.php" class="btn btn-outline-primary">Detail</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card about-card">
					<div class="card-body">
						<img src="<?php echo BASE_URL; ?>asset/img/running.png" class="img-fluid bg-primary rounded-circle" alt="">
						<p>Laundry Shoes</p>
						<p class="mb-4">Layanan <em>Laundry</em> Shoes merupakan jenis pelayanan laundry yang dikhususkan untuk pelayanan kebersihan dan perawatan Sepatu.</p>
						<a href="<?php echo BASE_URL; ?>layanan/sepatu.php" class="btn btn-outline-primary">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->
	<?php require 'template/footer.php'; ?>
	<!-- batas -->
</body>

</html>