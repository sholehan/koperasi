<?php 
//config
$server	= "localhost";
$username= "root";
$password= "";
$database= "koperasi_lth";

$koneksi = mysql_connect($server, $username, $password) or die ("Gagal Konek ke server MYSQL " . mysql_error());

$bukadb = mysql_select_db($database) or die("Gagal buka Database $database " . mysql_error());
				

 ?>