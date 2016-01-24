<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include "../../inc/inc_koneksi.php";
include "../../inc/fungsi_tanggal.php";
$table = "anggota";
date_default_timezone_set("Asia/Jakarta");
$petugas = $_SESSION['namauser'];
$skrng	 =date('Y-m-d H:i:s');


$no			=$_POST['no'];
$id			= mysql_real_escape_string($_POST['id']);
$nama		= mysql_real_escape_string($_POST['nama']);
$jk			= $_POST['jk'];
$tempat		= mysql_real_escape_string($_POST['tempat']);
$tgl		= jin_date_sql($_POST['tgl']);
$alamat		= mysql_real_escape_string($_POST['alamat']);
$rt			=$_POST['rt'];
$rw			=$_POST['rw'];
$hp			=$_POST['hp'];
$agama		=$_POST['agama'];
$perusahaan =$_POST['perusahaan'];
$pwd		= md5('123445');

$sql = mysql_query("SELECT *
				   FROM $table
				   WHERE noanggota= '$no'");
$row	= mysql_num_rows($sql);
if ($row>0){ 
	$input	= "UPDATE $table SET noidentitas='$id',
								namaanggota='$nama',
								jk='$jk',
								tempat_lahir='$tempat',
								tgl_lahir='$tgl',
								alamat='$alamat',
								rt='$rt',
								rw='$rw',
								hp='$hp',
								agama='$agama',
								perusahaan='$perusahaan'
					WHERE noanggota= '$no'";
	mysql_query($input);
	echo "<b>Data sukses diubah</b>";
}else{
	$input = "INSERT INTO $table (noanggota,noidentitas,namaanggota,jk,tempat_lahir,tgl_lahir,alamat,rt,rw,hp,agama,perusahaan,tgl_join,petugas,pwd)
				VALUES('$no','$id','$nama','$jk','$tempat','$tgl','$alamat','$rt','$rw','$hp','$agama','$perusahaan','$skrng','$petugas','$pwd')";
	mysql_query($input);
	echo "<b>Data Anggota sukses di Buat</b>";
}	 
?>