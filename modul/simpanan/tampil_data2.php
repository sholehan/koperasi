<script type="text/javascript">
$(function(){
	$('#theTable tr:even').addClass('stripe1');
	$('#theTable tr:odd').addClass('stripe2');

	$('#theTable tr').hover(
		function(){
			$(this).toggleClass('highlight');
		},
		function(){
			$(this).toggleClass('highlight');
		}
	);
});
</script>
<?php 
//tampil_data2
include '../../inc/inc_koneksi.php';
include '../../inc/fungsi_tanggal.php';

if (isset($_POST['tgl1']) && isset($_POST['tgl2'])){
	$tgl1 = date('Y-m-d', strtotime($_POST['tgl1'])); //formatnya masih dd-mm-yyyy -> yyyy-mm-dd
	$tgl2 = date('Y-m-d', strtotime($_POST['tgl2'])); //formatnya masih dd-mm-yyyy -> yyyy-mm-dd
	$where = " WHERE tgl BETWEEN '$tgl1' AND '$tgl2'";
} else {
	$where = "";
}

echo "<table id='theTable' width='100%'>
	<tr>
		<th width='5%'>No</th>
		<th>Tanggal</th>
		<th>No Anggota</th>
		<th>Anggota</th>
		<th>L/P</th>
		<th>Simpanan</th>
		<th>Jumlah</th> 
	</tr>";

	$sql = "SELECT a.*,b.jenis_simpanan,c.namaanggota,c.jk 
				FROM simpanan as a 
				JOIN jenis_simpan as b
				JOIN anggota as c 

				ON a.id_jenis=b.id_jenis AND a.noanggota=c.noanggota
				 $where ORDER BY a.id_simpanan DESC";
	$query = mysql_query($sql);
	$no=1;

	while ($rows=mysql_fetch_array($query)){
		echo "<tr>
			<td align='center'>$no</td>
			<td align='center'>" . jin_date_sql($rows['tgl']) . "</td>
			<td align='center'>" . $rows['noanggota'] . "</td>
			<td>" . $rows['namaanggota'] . "</td>
			<td align='center'>" . $rows['jk'] . "</td>
			<td>" . $rows['jenis_simpanan'] . "</td>
			<td align='right'>" . number_format($rows['jumlah']) . "</td>
		</tr>";
		$no++; 
	}
	echo "</table>";
?>