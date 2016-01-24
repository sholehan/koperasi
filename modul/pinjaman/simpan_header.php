<?php 
session_start();

include "../../inc/inc_koneksi.php";
include "../../inc/fungsi_tanggal.php";
$table = 'pinjaman_header';

$no = $_POST['no'];
$nomor = $_POST['nomor'];
$tgl = jin_date_sql($_POST['tgl']);
$lama = $_POST['lama'];
$bunga = $_POST['bunga'];
$jml = $_POST['jml'];
$userid = $_SESSION['namauser'];

$sql = "INSERT INTO $table (id_pinjam,tgl,noanggota,jumlah,lama,bunga,user_id)
		VALUES ('$no','$tgl','$nomor','$jml','$lama','$bunga', '$userid')
	"; 
mysql_query($sql);
echo "<b>Data sukses disimpan</b>";
?>