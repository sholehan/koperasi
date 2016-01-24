<?php

include '../../inc/inc_koneksi.php';
include '../../inc/fungsi_tanggal.php';

$table = "pinjaman_detail";

$no = $_POST['no']; // no pinjaman
$cicilan = $_POST['i'];
$tgl = jin_date_sql($_POST['tgl']);
$jml = $_POST['jml'];

$q = "SELECT * FROM $table 
		WHERE id_pinjam='$no' AND cicilan='$cicilan'
		ORDER BY id_pinjam,cicilan";

$sql = mysql_query($q);
$row = mysql_num_rows($sql);

if ($row > 0){
	$q2 = "UPDATE $table SET tgl_bayar='$tgl',jumlah_bayar='$jml'
			WHERE id_pinjam='$no' AND cicilan='$cicilan'";
	mysql_query($q2);
	echo "<b>Data sukses disimpan</b>";
}

?>