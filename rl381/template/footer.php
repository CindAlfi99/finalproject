<footer class="footer text-gray-800 mt-auto py-3">
    <div class="container text-white">
        <div class="row">
            <div class="col-12 col-md-4">
                <!-- <img class="img-logo" src="<?php echo BASE_URL; ?>asset/img/logo.png" alt="" height="100%"> -->
                <h3 class="h2 font-weight-bold">R'L381</h3>
                <p class="mt-2">Jl. May Zen, Kota Palembang</p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    &nbsp;0811-437-223
                </p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    &nbsp;acindi38@gmail.com
                </p>
            </div>
            <div class="col-6 col-md-3 offset-md-1 mt-2 mt-md-0">
                <h3 class="h5">Layanan</h3>
                <p class="mt-4"><a href="<?php echo BASE_URL; ?>about.php" class="text-reset text-decoration-none">Tentang Kami</a></p>
                <p><a href="<?php echo BASE_URL; ?>cekresi.php" class="text-reset text-decoration-none">Cek Resi</a></p>
                <p><a href="<?php echo BASE_URL; ?>order.php" class="text-reset text-decoration-none">Pemesanan</a></p>
            </div>
            <div class="col-6 col-md-3 offset-md-1 layanan mt-2 mt-md-0">
                <h3 class="h5">Layanan Laundry</h3>
                <p class="mt-4"><a href="<?php echo BASE_URL ?>layanan/kiloan.php" class="text-reset text-decoration-none"><img src="<?php echo BASE_URL; ?>asset/img/scale.png" width="25" height="25"> Kiloan</a></p>
                <p><a href="<?php echo BASE_URL ?>layanan/satuan.php" class="text-reset text-decoration-none"><img src="<?php echo BASE_URL; ?>asset/img/tshirt.png" width="25" height="25"> Satuan</a></p>
                <p><a href="<?php echo BASE_URL ?>layanan/karpet.php" class="text-reset text-decoration-none"><img src="<?php echo BASE_URL; ?>asset/img/carpet.png" width="25" height="25"> Karpet</a></p>
                <p><a href="<?php echo BASE_URL ?>layanan/sepatu.php" class="text-reset text-decoration-none"><img src="<?php echo BASE_URL; ?>asset/img/running.png" width="25" height="25"> Sepatu</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo BASE_URL; ?>asset/js/jquery.min.js" crossorigin="anonymous"></script>
<script src="<?php echo BASE_URL; ?>asset/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#lay').DataTable();
});
</script>