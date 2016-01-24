<?php 
include "../../inc/inc_koneksi.php";
$table = 'jenis_simpan';
$id = $_POST['cari'];
$q = "SELECT * FROM $table WHERE id_jenis='$id'";

$sql = mysql_query($q);
$row = mysql_num_rows($sql);

if ($row > 0){
	$r = mysql_fetch_array($sql);
	$data['jml'] = $r['jumlah'];
} else {
	$data['jml'] = '';
}

echo json_encode($data);
?>