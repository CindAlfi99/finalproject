<!doctype html>
<html lang="en">

<?php require 'template/header.php'; ?>

<body>
	<?php require 'template/navbar.php'; ?>
	<div class="container order-body py-4">
		<!-- modal resi start -->
		<div class="modal" id="modal-resi" tabindex="-1">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Pesanan Berhasil</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body"></div>
					<hr class="m-0">
					<div class="p-3 d-flex justify-content-center">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
					</div>
				</div>
			</div>
		</div>
		<!-- modal resi end -->
		<div class="row">
			<div class="col-md-5 d-flex align-self-center">
				<article>
					<h2 class="h3">Form Pemesanan</h2>
					<p>Silakan isi form pemesanan dan Admin akan melakukan konfirmasi setelah pesanan Anda diterima. Pastikan nomor HP yang Anda cantumkan aktif. Simpan nomor resi untuk mempermudah pengecekan status cucian.</p>
				</article>
			</div>
			<div class="col-md-7">
				<form id="form-order">
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="name">Nama</label>
							<input type="text" name="nama" class="form-control" required id="name" autofocus autocomplete="off">
						</div>
						<div class="form-group col-md-12">
							<label for="wa">No.Telp (WA)</label>
							<!-- <input type="text" pattern="\d*" maxlength="12"> -->
							<input type="number" name="no_wa" class="form-control" required id="wa" maxLength="12" oninput="this.value=this.value.slice(0,this.maxLength)">
						</div>
						<div class="form-group col-md-12">
							<label for="address col-md-12">Alamat </label>
							<textarea name="alamat" class="form-control" required id="address" placeholder="Masukkan Alamat Penjemputan"></textarea>
						</div>
						<div class="form-group col-3 layanan">
							<label>Layanan</label>
							<select name="layanan[0][jenis]" class="form-control" required onchange="getJenisLayanan(this.value, 0);">
								<option selected>Pilih..</option>
								<option value="Kiloan">Kiloan</option>
								<option value="Satuan">Satuan</option>
								<option value="Karpet">Karpet</option>
								<option value="Sepatu">Sepatu</option>
							</select>
						</div>
						<div class="form-group col-7">
							<label>Jenis item</label>
							<select name="layanan[0][item]" class="form-control jenis-item-0" required>
								<option>Pilih Layanan</option>
							</select>
						</div>
						<div class="form-group col-2 jumlah">
							<label>Jumlah</label>
							<input type="number" min="1" max="100" name="layanan[0][jml_item]" class="form-control" required>
						</div>
						<div class="form-group col-md-2 offset-md-10">
							<button type="button" class="btn btn-link btn-tambah">Tambah +</button>
						</div>
					</div>
					<input type="submit" value="Order Sekarang" class="btn btn-primary btn-order">
				</form>
			</div>
		</div>
	</div>
	<!-- footer -->
	<?php require 'template/footer.php'; ?>
	<!-- batas -->
	<script src="<?php echo BASE_URL; ?>asset/js/order.js"></script>
</body>

</html>