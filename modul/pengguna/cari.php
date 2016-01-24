<?php
include "../../inc/inc_koneksi.php";
include "../../inc/fungsi_tanggal.php";
$table	= 'users';
$id	= $_POST['id'];
$text	= "SELECT *
			FROM $table WHERE user_id= '$id'";
$sql 	= mysql_query($text);
$row	= mysql_num_rows($sql);
if ($row>0){
while ($r=mysql_fetch_array($sql)){	
	
	$data['namalengkap']	= $r['namalengkap'];
	$data['tempat']			= $r['tempat_lahir'];
	$data['tgl']			= jin_date_sql($r['tgl_lahir']);
	$data['level']			= $r['level'];
	
	echo json_encode($data);
}
}else{
	$data['namalengkap']	= '';
	$data['tempat_lahir']	= '';
	$data['tgl_lahir']		= '';
	$data['level']			= '';

	echo json_encode($data);
	
}
?>