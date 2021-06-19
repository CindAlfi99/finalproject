<?php
require 'config/config.php';
require __DIR__ . '/vendor/autoload.php';

$query = mysqli_query($conn, "SELECT order_masuk.jenis_item, order_masuk.jumlah, order_masuk.ongkir,layanan.jenis_item, layanan.satuan, layanan.harga FROM order_masuk JOIN layanan ON order_masuk.jenis_item = layanan.jenis_item");
$join_tbl = mysqli_fetch_assoc($query);
if (isset($_GET["jenis"])) {
    $val=$_GET["jenis"];
    $val_M = mysqli_real_escape_string($conn, $val);
    
    $sql="SELECT * FROM layanan WHERE jenis_layanan ='$val'";
    $result= mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0) {
        echo "<select>";
        while ($rows= mysqli_fetch_assoc($result)) {
            echo "<option value=".$rows['jenis_item'].">".$rows['jenis_item']." Harga :".$rows['harga']."</option>";
        }
        echo "</select>";
    } else {
        echo "<select>
                <option>Select Layanan</option>
            </select>";
    }
} else {
    $options = array(
        'cluster' => 'ap1',
        'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
        'ee0a2d4a7d1a6c8ef4f8',
        'cadca09b4c0acaaeaaed',
        '1206705',
        $options
    );
    $val = $_POST;
    $length = count($_POST['layanan']);
    $no_resi = rand(1000, 9999);
    $nama = $_POST['nama'];
    $no_wa = $_POST['no_wa'];
    $alamat = $_POST['alamat'];
    $status = 'jemput';
    $status_pembayaran = 'belum_lunas';
    $mode = 'online';
    $tgl_pesan = date('Y-m-d H:i:s');
    $tgl_selesai = date('Y-m-d H:i:s', time()+172800);
    $layanan = $_POST['layanan'];
    $satuan = $join_tbl['satuan'];
    $harga = $join_tbl['harga'];
    $ongkir = 10000;
    $total_byr = $join_tbl['harga'] + $ongkir * $join_tbl['jumlah'] - 10000 ;

    for ($i=0; $i < $length; $i++) { 
        $sql="INSERT INTO order_masuk (no_resi, nama_pemesan, no_wa, alamat_jemput, jenis_layanan, jenis_item, jumlah,satuan, harga,ongkir,total_bayar, status_cucian,status_pembayaran,mode, tanggal_pesan, tanggal_selesai)";
        $sql.=' VALUES ("'.$no_resi.'", "'.$nama.'", "'.$no_wa.'", "'.$alamat.'", "'.$layanan[$i]['jenis'].'", "'.$layanan[$i]['item'].'", '.$layanan[$i]['jml_item'].',"'.$satuan.'","'.$harga.'","'.$ongkir.'","'.$total_byr.'", "'.$status.'", "'.$status_pembayaran.'", "'.$mode.'","'.$tgl_pesan.'", "'.$tgl_selesai.'")';
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die('Invalid query: ' . mysqli_error($conn));
        }
        elseif($result){
            $data['message'] = 'Pesanan Baru Masuk'.date('d-m-Y H:i:s');
            $pusher->trigger('my-channel', 'my-event', $data);
        }
    }

    header('Content-Type: application/json');
    echo json_encode(array('data' => array('status' => 'berhasil', 'no_resi' => "$no_resi")), true);
}
