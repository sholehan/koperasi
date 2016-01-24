<script type="text/javascript" src="modul/edit_profil/ajax.js"></script>
<style type="text/css">
button {
	margin: 2px;
	position: relative;
	padding: 4px 8px 4px 4px;
	cursor: pointer;
	list-style: none;
}
button span.ui-icon{
	float: left;
	margin: 0 4px;
}
</style>

<?php  

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

function jin_date_sql($date){
	$exp = explode('-', $date); // pisah YYYY-MM-DD bertdarkan -
	if (count($exp) == 3){
		$date = $exp[2] . '-' . $exp[1] . '-' . $exp[0];
	}

	return $date;
}


$userid = $_SESSION['namauser'];
$query = mysql_query("SELECT * FROM users WHERE user_id='$userid'");
$r = mysql_fetch_array($query);
$tgl = jin_date_sql($r['tgl_lahir']);

echo "<div id='dalam_content'>
		<div id='p' class='easyui-panel' title='Edit Profil' style='float:left;width:auto;padding:5px;margin-bottom:10px;'>
			<form name='form' method='post' action='modul/edit_profil/simpan.php' enctype='multipart/form-data'>
				<table width='100%'>
					<tr>
						<td width='15%'>Nama Anggota</td>
						<td width='2%'>:</td>
						<td><input type='text' name='nama_anggota' id='nama_anggota' size='50' maxlength='50' class='input' value='" . $r['namalengkap'] ."' /></td>
					</tr>
					<tr>
						<td>TEMPAT LAHIR</td>
						<td width='2%'>:</td>
						<td><input type='text' name='tempat' id='tempat' size'15' maxlength='35' class='input'  value='" . $r['tempat_lahir'] ."' /></td>
					</tr>
					<tr>
						<td>TANGGAL LAHIR</td>
						<td width='2%'>:</td>
						<td><input type='text' name='tgl' id='tgl' size'15' maxlength='35' class='input' value='" . $tgl ."' /></td>
					</tr>
					<tr>
						<td width='15%'>Foto</td>
						<td width='2%'>:</td>
						<td><input type='file' name='fupload' size='20' /></td>
					</tr>
					<tr>
						<td colspan='3' align='center'>
							<button type='submit' class='ui-state-default ui-corner-all' id='simpan'>
								<span class='ui-icon ui-icon-disk'></span>Simpan
							</button>
						</td>
					</tr>
				</table>
			</form>
		</div>
</div>";
?>