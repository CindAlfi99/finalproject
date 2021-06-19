<section id="navbar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php"><span>R'L381</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo BASE_URL; ?>index.php">Home <span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo BASE_URL; ?>about.php">Tentang Kami</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="<?php echo BASE_URL; ?>layanan/satuan.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Layanan
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item text-secondary font-weight-bold text-capitalize" href="<?php echo BASE_URL; ?>layanan/satuan.php">Laundry Satuan</a>
							<a class="dropdown-item text-secondary font-weight-bold text-capitalize" href="<?php echo BASE_URL; ?>layanan/kiloan.php">Laundry Kiloan</a>
							<a class="dropdown-item text-secondary font-weight-bold text-capitalize" href="<?php echo BASE_URL; ?>layanan/karpet.php">Laundry Karpet</a>
							<a class="dropdown-item text-secondary font-weight-bold text-capitalize" href="<?php echo BASE_URL; ?>layanan/sepatu.php">Laundry Shoes</a>
						</div>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo BASE_URL; ?>cekresi.php">Cek Resi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="<?php echo BASE_URL; ?>order.php" tabindex="-1" aria-disabled="true">Pemesanan</a>
					</li>

				</ul>

			</div>

		</div>
	</nav>
	<!-- Optional JavaScript; choose one of the two! -->
</section>