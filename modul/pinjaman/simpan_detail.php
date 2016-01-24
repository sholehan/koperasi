<?php 

include "../../inc/inc_koneksi.php";
include "../../inc/fungsi_tanggal.php";
$table = 'pinjaman_detail';

$no = $_POST['no'];
$cicilan = $_POST['i'];
$angsuran = $_POST['angsuran']; 
$bunga = $_POST['t_bunga']; 

$tgl_now = jin_date_sql($_POST['tgl']);

$tangal_jt = date('Y-m-d', strtotime('+' . $cicilan .' month', strtotime($tgl_now)));


$sql = "INSERT INTO $table (id_pinjam,cicilan,angsuran,bunga,tgl_jatuh_tempo,ket)
		VALUES ('$no','$cicilan','$angsuran','$bunga','$tangal_jt','$tangal_jt')
	";
echo $sql;
mysql_query($sql);
echo "<b>Data sukses disimpan</b>";

?>