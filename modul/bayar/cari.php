<?php 

include '../../inc/inc_koneksi.php';
include '../../inc/fungsi_tanggal.php';

$table = 'pinjaman_header';
$id = $_POST['cari'];
$q = "SELECT * FROM $table WHERE id_pinjam='$id'";

$sql = mysql_query($q);
$row = mysql_num_rows($sql);

if ($row > 0){
	while ($r=mysql_fetch_array($sql)){
		$data['nomor'] = $r['noanggota'];
		$data['tgl'] = jin_date_sql($r['tgl']);
		$data['lama'] = $r['lama'];
		$data['jml'] = number_format($r['jumlah']);
		$data['bunga'] = $r['bunga'];

		echo json_encode($data);
	}
} else {
	$data['nomor'] = '';
	$data['tgl'] = '';
	$data['lama'] = '';
	$data['jml'] = '';
	$data['bunga'] = '';

	echo json_encode($data);
}
?>