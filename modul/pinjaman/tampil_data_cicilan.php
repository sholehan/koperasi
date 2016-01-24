
<?php 
//tampil_data2
include '../../inc/inc_koneksi.php';
include '../../inc/fungsi_tanggal.php';

$cari = $_GET['cari'];
$where = " WHERE id_pinjam='$cari'";

echo "<table id='theTable' width='100%'>
	<tr>
		<th width='5%'>No</th>
		<th>Cicilan Ke</th>
		<th>Jatuh Tempo</th>
		<th>Angsuran</th>
		<th>Bunga</th>
		<th>Total</th> 
	</tr>";

	$sql = "SELECT * FROM pinjaman_detail 
				 $where ORDER BY id_pinjam DESC";
	$query = mysql_query($sql);
	$no=1;
	$gtotal = 0;

	while ($rows=mysql_fetch_array($query)){
		$jumlah = $rows['angsuran'] + $rows['bunga'];
		$tgl = jin_date_sql($rows['tgl_jatuh_tempo']);

		echo "<tr>
			<td align='center'>$no</td>
			<td align='center'>" . $rows['cicilan'] . "</td>
			<td align='center'>" . $tgl . "</td>
			<td align='right'>" . number_format($rows['angsuran']) . "</td>
			<td align='right'>" . number_format($rows['bunga']) . "</td>
			<td align='right'>" . number_format($jumlah) . "</td> 
		</tr>";
		$no++; 
		$gtotal += $jumlah;
	}
	echo "
	<tr>
		<td colspan='4' align='center'>Total</td>
		<td align='right'><b>" . number_format($gtotal) . "</b></td>
	</tr>
	</table>";
?>