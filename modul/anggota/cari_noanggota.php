<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 



include '../../inc/inc_koneksi.php';
include '../../inc/fungsi_tanggal.php';

if ($_SESSION['cabang']==1) {
	$awalan='A';
} elseif ($_SESSION['cabang']==2) {
	$awalan='B';
} elseif ($_SESSION['cabang']==3) {
	$awalan='C';
} else
	$awalan='XX';


$table = 'anggota';
//$sql = "SELECT MAX(RIGHT(noanggota,5)) as noakhir  FROM $table ORDER BY 'noanggota'"; // SELECT LEFT(noanggota,1) as noakhir  FROM anggota WHERE  LEFT(noanggota,1)='A'
$sql = "SELECT LEFT(noanggota,1) as noakhir  FROM $table WHERE LEFT(noanggota,1)='$awalan'"; 

$q = mysql_query($sql);
$row = mysql_num_rows($q);

if ($row > 0){
	//$r = mysql_fetch_array($q);


// 	$noakhir = (int) substr($r['noakhir'], 2, 5);
	
	$noakhir = $row + 1;
//	$noakhir++; //5/
	$nomor = $awalan . sprintf("%05s", $noakhir);
	$data['nomor'] = $nomor;
	echo json_encode($data);

} else {
	$data['nomor'] = $awalan."00001";
	echo json_encode($data);
}








?>
