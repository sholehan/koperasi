<?php 

include '../../inc/inc_koneksi.php';
include '../../inc/fungsi_tanggal.php';

$table = 'pinjaman_header';
$sql = "SELECT max(id_pinjam) as noakhir FROM $table";

$q = mysql_query($sql);
$row = mysql_num_rows($q);

if ($row > 0){
	$r = mysql_fetch_array($q);
	$noakhir = (int) substr($r['noakhir'], 2, 4);
	$noakhir++; //5
	$no = 'P' . sprintf("%04s", $noakhir);
	$data['no'] = $no;
	echo json_encode($data);
} else {
	$data['no'] = 'P0001';
	echo json_encode($data);
}
?>