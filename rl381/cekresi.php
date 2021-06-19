<!doctype html>
<html lang="en">

<?php require 'template/header.php'; ?>

<body>
	<?php require 'template/navbar.php'; ?>
	<!-- cek resi -->
	<div class="container my-5 pt-5">
		<div class="row">
			<div class="col-md-6 d-flex align-self-center">
				<article>
					<h1 class="h3">Cek Resi</h1>
					<p>
						Lacak status cucian Anda sesuai dengan nomor resi yang diberikan pada saat pemesanan.
					</p>
				</article>
			</div>
			<div class="col-md-6 d-flex justify-content-center" style="height: 200px">
				<img src="<?php echo BASE_URL; ?>asset/img/laundry-satuan.png" alt="" height="100%">
			</div>
		</div>

		<div id="alert" class="mb-4"></div>

		<div class="row justify-content-md-center">
			<div class="col-md-6 text-center">
				<div class="form-group">
					<label for="no-resi"><strong>Silakan Cek nomor resi Anda</strong></label>
					<input id="no-resi" type="number" class="form-control" autofocus placeholder="Masukkan no resi Anda" aria-describedby="resiHelp" name="no_resi">
				</div>
				<button class="btn btn-primary btn-order" id="tombol-cari">Cek Resi</button>
			</div>
		</div>
	</div>

	<!-- footer -->
	<?php require 'template/footer.php'; ?>
	<!-- batas -->
	<script src="<?php echo BASE_URL; ?>asset/js/ajax.js"></script>
</body>

</html>