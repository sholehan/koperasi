<?php
include "../../inc/inc_koneksi.php"; 
include "../../inc/fungsi_tanggal";
$userid		=$_POST['userid'];
$nama		=$_POST['nama'];
$pwd		=md5($_POST['pwd']);
$tempat		=$_POST['tempat'];
$tgl		=jin_date_sql($_POST['tgl']);
$level		=$_POST['level'];
$sandi		=$_POST['pwd'];

$sql = mysql_query("SELECT * FROM users WHERE user_id= '$userid'");

$row	= mysql_num_rows($sql);
	if ($row > 0){

		if(!empty($sandi)){
		$input	= "UPDATE users SET namalengkap='$nama',password='$pwd', tempat_lahir='$tempat', tgl_lahir='$tgl', level='$level' WHERE user_id= '$userid'";
		mysql_query($input); 

			echo "<b>Data Sukses diubah</b>";
		
		}else{

		$input	= "UPDATE users SET namalengkap	='$nama', tempat_lahir='$tempat', tgl_lahir='$tgl', level='$level'	WHERE user_id= '$userid'";
		mysql_query($input);
		} 
			echo "<b>Data Sukses diubah</b>";
	}else{
		$input = "INSERT INTO users (user_id,namalengkap,password,tempat_lahir,tgl_lahir,level) VALUES ('$userid','$nama','$pwd','$tempat','$tgl','$level')";
		
		mysql_query($input);
		echo "<b>Data sukses disimpan</b>";
	}	
	echo $input;
?>