<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 



include "../../inc/inc_koneksi.php";
include "../../inc/fungsi_tanggal.php";
date_default_timezone_set("Asia/Jakarta");
$table = "users";
$id = $_SESSION['namauser'];


$sql = mysql_query("SELECT * FROM $table WHERE user_id='$id'");
$row = mysql_num_rows($sql);

if ($row > 0){
	$nama 		= $_POST['nama_anggota'];
	$tempat		=$_POST['tempat'];
	$tgl		=jin_date_sql($_POST['tgl']);

	$temp 		= $_FILES['fupload']['tmp_name'];
	$namafile 	= $_FILES['fupload']['name'];
	$ext 		= $_FILES['fupload']['type']; 

	$dir_upload = "../../foto/";
	$filename_upload = $dir_upload . $namafile;

	if (empty($temp)){
		$sql = "UPDATE $table SET namalengkap='$nama',tempat_lahir='$tempat',tgl_lahir='$tgl' WHERE user_id='$id'";
		mysql_query($sql);
	} else {
		//ada file yg diupload
		move_uploaded_file($temp, $filename_upload);
		$sql = "UPDATE $table SET namalengkap='$nama',tempat_lahir='$tempat',tgl_lahir='$tgl',foto='$namafile' WHERE user_id='$id'";
		mysql_query($sql);
	}

	//redirect modul edit profil
	header('Location:../../media.php?module=edit_profil');
}
?>