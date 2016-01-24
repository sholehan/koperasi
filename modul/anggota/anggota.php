<script language="javascript" src="modul/anggota/ajax.js"></script>
<style type="text/css">
button {
	margin: 2px; 
	position: relative; 
	padding: 4px 8px 4px 4px; 
	cursor: pointer;   
	list-style: none;
}
button span.ui-icon {
	float: left; 
	margin: 0 4px;
}
</style>
<?php
echo "<div id='dalam_content'>
<h2>DAFTAR ANGGOTA</h2>
<div id='menu-tombol'>
	<div id='tombol-tambah'>
		<button class=\"easyui-linkbutton\" data-options=\"iconCls:'icon-add'\" id='tambah'>Tambah
		</button>
	</div>
	<div id='tombol-cari'>
		<input placeholder='Masukan Nama, ID Anggota, No Identitas untuk pencarian' type='text' id='txt_cari' size='75' />
		<button class=\"easyui-linkbutton\" data-options=\"iconCls:'icon-search'\" id='cari'>Cari
		</button>
	</div>
</div>

<div id='tampil_data'></div>
</div>";
echo "
	<div id='form_input' title='Tambah/Edit Data'>
	<table width='100%'>
		<tr>
			<td>Nomor Anggota</td>
			<td width='2%'>:</td>
			<td><input type='text' name='nomor' id='nomor' size='15' maxlength='10' class='input' placeholder='Nomor Anggota'></td>
		</tr>

		<tr>
			<td>No. Identitas</td>
			<td width='2%'>:</td>
			<td><input type='text' name='identitas' id='identitas' size='20' maxlength='20' class='input' placeholder='No KTP'></td>
		</tr>

		<tr> 
			<td>Nama</td>
			<td width='2%'>:</td>
			<td><input type='text' name='anggota' id='anggota' size='50' maxlength='50' class='input' placeholder='Nama Lengkap'></td>
		</tr> 

		<tr> 
			<td>Jenis Kelamin</td>
			<td width='2%'>:</td>
			<td>
				<select name='jk' id='jk'>
					<option value=''>-Pilih-</option>
					<option value='L'>Laki-laki</option>
					<option value='P'>Perempuan</option>
				</select>
			</td>
		</tr> 

		<tr> 
			<td>Tempat Lahir</td>
			<td width='2%'>:</td>
			<td><input type='text' name='tempat' id='tempat' size='30' maxlength='30' class='input' placeholder='Tempat Lahir'></td>
		</tr>

		<tr> 
			<td>Tanggal Lahir</td>
			<td width='2%'>:</td>
			<td><input type='text' name='tgl' id='tgl' size='12' maxlength='12' class='input' placeholder='DD-MM-YYYY'></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td width='2%'>:</td>
			<td><input type='text' name='alamat' id='alamat' size='50' maxlength='50' class='input' placeholder='Alamat Rumah'></td>
		</tr>

		<tr>
			<td>RT/RW</td>
			<td width='2%'>:</td>
			<td ><input type='text' name='rt' id='rt' size='4' maxlength='4' class='input' placeholder='RT'> / <input type='text' name='rw' id='rw' size='4' maxlength='4' class='input' placeholder='RW'></td>	
		</tr>

		

		<tr>
			<td>HP</td>
			<td width='2%'>:</td>
			<td><input type='text' name='hp' id='hp' size='12' maxlength='12' class='input' placeholder='Nomor HP'></td>
		</tr>

		<tr>
			<td width='15%'>Agama</td>
			<td width='2%'>:</td>
			<td>
				<select name='agama' id='agama' class='input'>
					<option value=''>-Pilih Kepercayaan-</option>";
						$abc = "SELECT * FROM t_agama";
						$cba = mysql_query($abc);
						while ($bca=mysql_fetch_array($cba)){ 
							echo "<option value='" . $bca['id'] . "'>" . $bca['nama_agama'] . "</option>"; 
								}
							echo "
				</select>
			</td>
		</tr>
		<tr>
			<td width='15%'>Perusahaan</td>
			<td width='2%'>:</td>
			<td>
				<select name='perusahaan' id='perusahaan' class='input'>
					<option value=''>-Pilih Perusahaan-</option>";
						$sql = "SELECT * FROM t_perusahaan";
						$query = mysql_query($sql);
						while ($rows=mysql_fetch_array($query)){ 
							echo "<option value='" . $rows['id'] . "'>" . $rows['nama'] . "</option>"; 
								}
							echo "
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='3' align='center'>
				<button class=\"easyui-linkbutton'\" data-options=\"iconCls:'icon-save'\" id='simpan'>Simpan</button>
				<button class=\"easyui-linkbutton'\" data-options=\"iconCls:'icon-logout'\" id='tutup'>Tutup</button>
			</td>
		</tr>
	</table> 
	</div>
</div>

";
?>