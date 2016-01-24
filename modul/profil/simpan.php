<?php 
include '../../inc/inc_koneksi.php';
$tabel = "profile";
$sql = mysql_query("SELECT * FROM $tabel WHERE id='" . $_POST['id'] . "'");
$row = mysql_num_rows($sql);
if ($row > 0){
	$update = " UPDATE $tabel SET 
				koperasi 	= '" . $_POST['koperasi'] . "', 
				alamat		= '" . $_POST['alamat'] . "',
				kota 		= '" . $_POST['kota'] . "',
				hp 			= '" . $_POST['hp'] . "',
				fax 		= '" . $_POST['fax'] . "',
				email 		= '" . $_POST['email'] . "',
				pimpinan 	= '" . $_POST['pimpinan'] . "'

				WHERE id 	= '" . $_POST['id'] . "' ";

	mysql_query($update);
	echo "<b>Data sukses diubah</b>";
}
?>