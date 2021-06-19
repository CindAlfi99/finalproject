<?php
require $_SERVER['DOCUMENT_ROOT'] . '/rl381/config/config.php';

$keyword = $_GET['keyword'];

$query =  mysqli_query($conn, "SELECT DISTINCT no_resi, alamat_jemput,nama_pemesan,tanggal_pesan,tanggal_selesai, status_cucian, status_pembayaran FROM order_masuk WHERE no_resi = $keyword");
$perintahQuery = mysqli_query($conn, "SELECT order_masuk.id_order, order_masuk.jenis_layanan, order_masuk.jenis_item, order_masuk.jumlah,order_masuk.ongkir, order_masuk.status_cucian, layanan.jenis_item, layanan.satuan, layanan.harga FROM order_masuk JOIN layanan ON order_masuk.jenis_item = layanan.jenis_item WHERE order_masuk.no_resi = $keyword ");
$perintahQuery = mysqli_query($conn, "SELECT order_masuk.id_order, order_masuk.jenis_layanan, order_masuk.jenis_item, order_masuk.jumlah,order_masuk.ongkir, order_masuk.status_cucian,order_masuk.status_pembayaran, layanan.jenis_item, layanan.satuan, layanan.harga FROM order_masuk JOIN layanan ON order_masuk.jenis_item = layanan.jenis_item WHERE order_masuk.no_resi = $keyword ");

$join_tbl = mysqli_fetch_assoc($query);

?>
<style>
    .text-secondary-d1 {
        color: #728299 !important;
    }

    .brc-default-l1 {
        border-color: #dce9f0 !important;
    }

    .ml-n1,
    .mx-n1 {
        margin-left: -.25rem !important;
    }

    .mr-n1,
    .mx-n1 {
        margin-right: -.25rem !important;
    }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem !important;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1);
    }

    .text-grey-m2 {
        color: #888a8d !important;
    }

    .font-bolder,
    .text-600 {
        font-weight: 600 !important;
    }

    .text-110 {
        font-size: 110% !important;
    }

    .text-120 {
        font-size: 120% !important;
    }
</style>

<?php if (mysqli_num_rows($query) > 0) : ?>
    <div class="page-content container">
        <div class="container px-0">
            <div class="row mt-4">
                <div class="col-12 px-0">
                    <!-- .row -->
                    <hr class="row brc-default-l1 mx-n1 mb-4" />
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="text-grey-m2">
                                <div class="my-1">
                                    Nama Pemesan: <?php echo $join_tbl["nama_pemesan"] ?>
                                </div>
                                <div class="my-1">
                                    No Resi: <?php echo $join_tbl["no_resi"] ?>
                                </div>
                                <div class="my-1">
                                    Alamat: <?php echo $join_tbl["alamat_jemput"] ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                            <hr class="d-sm-none" />
                            <div class="text-grey-m2">
                                <div class="my-2">
                                    Tanggal Pesan: <?php echo $join_tbl["tanggal_pesan"] ?>
                                </div>
                                <div class="my-2">
                                    Tanggal Selesai: <?php echo $join_tbl["tanggal_selesai"] ?>
                                </div>
                                <div class="my-2">
                                    Status Cucian: <span class="badge badge-warning badge-pill px-20"><?php echo $join_tbl['status_cucian']; ?></span>
                                </div>
                                <div class="my-2">
                                    Status Pembayaran: <span class="badge badge-warning badge-pill px-20"><?php echo $join_tbl['status_pembayaran']; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- batas -->
                    <div class="mt-4">
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <tr class="bg-primary text-white">
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Item</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Total Bayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $count = 0;
                                        $ongkir = 0;
                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($perintahQuery)) :
                                            $total = $row['harga'] * $row['jumlah'];
                                            $count += $total; ?>
                                            <th scope="row"><?php echo $i++; ?></th>
                                            <td><?php echo $row["jenis_item"] ?></td>
                                            <td class="text-center"><?php echo $row["jumlah"] ?></td>
                                            <td><?php echo $row["harga"] ?></td>
                                            <td><?php echo $total; ?></td>
                                            <?php $ongkir += $row['ongkir']; ?>
                                        <?php endwhile; ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr class="row brc-default-l1 mx-n1 mb-4" />
                        <?php if ($join_tbl['status_cucian'] === 'jemput') : ?>
                            <strong>Belum termasuk ongkir</strong> (Masih nota Sementara)
                        <?php endif; ?>
                        <div class="row border-b-2 brc-default-l2"></div>
                        <div class="row mt-3">
                            <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                Catatan : Periksa dengan benar
                            </div>
                            <?php if ($join_tbl['status_cucian'] != 'jemput') : ?>

                                <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                                    <div class="row my-2">
                                        <div class="col-7 text-right">
                                            Ongkir
                                        </div>
                                        <div class="col-5">
                                            <?php if ($ongkir > 10000) : ?>
                                                <?php $ongkir = $ongkir - 5000;
                                                $count += $ongkir; ?>
                                                <span class="text-120 text-secondary-d1"><?php echo $ongkir; ?></span>
                                            <?php elseif ($ongkir == 10000) : ?>
                                                <?php $count += 10000;
                                                $ong = 10000; ?>
                                                <span class="text-120 text-secondary-d1"><?php echo $ong; ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="row my-2">
                                        <div class="col-7 text-right">
                                            Total Bayar
                                        </div>
                                        <div class="col-5">
                                            <span class="text-110 text-secondary-d1"><?php echo $count; ?></span>
                                        </div>
                                    </div>
                                <!-- batas -->
                                </div>
                            <?php endif; ?>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class='alert alert-danger alert-dismissible fade show mt-4' role='alert'>
        <strong>Gagal!</strong> Nomor resi yang Anda masukkan tidak terdaftar.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
