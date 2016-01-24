<?php 
include '../../inc/inc_koneksi.php'; 
include '../../inc/fungsi_koperasi.php';

$noanggota = $_POST['cari'];
$sisaangsuran = sisaAngsuran($noanggota);
$data['sisa'] = $sisaangsuran;

echo json_encode($data);

?>