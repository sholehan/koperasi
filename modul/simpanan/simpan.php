<?php 
session_start();

include "../../inc/inc_koneksi.php";
include "../../inc/fungsi_tanggal.php";
$table = 'simpanan';
$no = $_POST['no'];
$tgl = jin_date_sql($_POST['tgl']);
$jenis = $_POST['jenis'];
$jml = $_POST['jml'];

$userid = $_SESSION['namauser'];
$sql = "INSERT INTO $table (tgl,noanggota,id_jenis,jumlah,user_id,tglinsert)
		VALUES ('$tgl','$no','$jenis','$jml','$userid',now())
	";
mysql_query($sql);
echo "<b>Data sukses disimpan</b>";
?>