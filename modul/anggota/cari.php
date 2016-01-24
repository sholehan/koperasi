<?php
include "../../inc/inc_koneksi.php";
include "../../inc/fungsi_tanggal.php";
$table	= 'anggota';
$id	= $_POST['id'];
$text	= "SELECT * FROM $table WHERE noanggota= '$id'";

$sql 	= mysql_query($text);
$row	= mysql_num_rows($sql);
if ($row>0){
while ($r=mysql_fetch_array($sql)){	
	
	$data['id']			= $r['noidentitas']; 
	$data['nama']		= $r['namaanggota'];
	$data['jk']			= $r['jk'];
	$data['tempat']		= $r['tempat_lahir'];
	$data['tgl']		= jin_date_sql($r['tgl_lahir']);  
	$data['alamat']		= $r['alamat'];
	$data['rt']			= $r['rt'];
	$data['rw']			= $r['rw'];
	$data['hp']			= $r['hp'];
	$data['agama']		= $r['agama'];
	$data['perusahaan']	= $r['perusahaan'];
	
	echo json_encode($data);
}
}else{
	$data['id']		= ''; 
	$data['nama']	= '';
	$data['jk']		= '';
	$data['tempat']	= '';
	$data['tgl']	= '';  
	$data['alamat']	= '';
	$data['rt']		= '';
	$data['rw']		= '';
	$data['hp']		= '';
	$data['agama']	= '';
	$data['perusahaan']		= '';

	echo json_encode($data);
	
}
?>