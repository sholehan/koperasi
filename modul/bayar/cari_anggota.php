<?php 
//cari_anggota
include '../../inc/inc_koneksi.php';
include '../../inc/fungsi_tanggal.php';
include '../../inc/fungsi_koperasi.php';

$table = 'anggota';
$id = $_POST['cari'];
$q = "SELECT * FROM $table WHERE noanggota='$id'";

$sql = mysql_query($q);
$row = mysql_num_rows($sql);

if ($row > 0){
	$r = mysql_fetch_array($sql);
	if ($r['jk'] =='L'){
		$sex = 'Laki-laki';
	} else {
		$sex = 'Perempuan';
	}
	$sisaangsuran = sisaAngsuran($r['noanggota']);
	echo "<table>
		<tr>
			<td>No Identitas</td>
			<td>: $r[noidentitas]</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>: $r[namaanggota]</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>: $sex</td>
		</tr>
		<tr>
			<td>Tempat, Tgl Lahir</td>
			<td>: " . $r['tempat_lahir'] . ", " . jin_date_sql($r['tgl_lahir']) . "</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>: " . $r['alamat'] . "</td>
		</tr>
		<tr>
			<td>Sisa Angsuran</td>
			<td>: " . number_format($sisaangsuran) . "</td>
		</tr>
	</table>";
}
?>