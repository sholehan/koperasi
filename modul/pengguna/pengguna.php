<script type="text/javascript" src="modul/pengguna/ajax.js"></script>
<style type="text/css">
button {
	margin: 2px;
	position: relative;
	padding: 4px 8px 4px 8px;
	cursor: pointer;
	list-style: none;
}

button span.ui-icon{
	float: left;
	margin: 0 4px;
}
</style>
<?php 
echo "<div id='dalam_content'>
	<h2>DAFTAR PENGGUNA</h2>
	<button class='easyui-linkbutton' data-options=\"iconCls:'icon-add'\" id='tambah'>Tambah</button>
	</div>

	<div id='tampil_data'></div>
</div>

<div id='form_input' title='Tambah/Edit Data'>
	<table width='100%'>
		<tr>
			<td>USER ID</td>
			<td width='2%'>:</td>
			<td><input type='text' name='userid' id='userid' size'25' maxlength='25' class='input' /></td>
		</tr>
		<tr>
			<td>NAMA LENGKAP</td>
			<td width='2%'>:</td>
			<td><input type='text' name='namalengkap' id='namalengkap' size'15' maxlength='35' class='input' /></td>
		</tr>
		<tr>
			<td>PASSWORD *</td>
			<td width='2%'>:</td>
			<td><input type='password' name='pwd' id='pwd' size'25' maxlength='25' class='input' /></td>
		</tr>
		<tr>
			<td>TEMPAT LAHIR</td>
			<td width='2%'>:</td>
			<td><input type='text' name='tempat' id='tempat' size'15' maxlength='35' class='input' /></td>
		</tr>
		<tr>
			<td>TANGGAL LAHIR</td>
			<td width='2%'>:</td>
			<td><input type='text' name='tgl' id='tgl' size'15' maxlength='35' class='input' /></td>
		</tr>
		
		<tr>
			<td width='15%'>Jabatan</td>
			<td width='2%'>:</td>
			<td>
				<select name='level' id='level' class='input'>
					<option value=''>-Pilih Level-</option>";
						$sql = "SELECT * FROM t_jabatan";
						$query = mysql_query($sql);
						while ($rows=mysql_fetch_array($query)){ 
							echo "<option value='" . $rows['id'] . "'>" . $rows['nama_jabatan'] . "</option>"; 
								}
							echo "
				</select>
			</td>
		</tr>
	</table>
	*) Kosongkan jika tidak ingin di ubah
</div>";

?>