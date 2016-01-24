
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<ul>
	<li> <a href="?module=home"  > Depan</a> </li>
</ul>
<ul class=" cd-accordion-menu">
	<li calss="has-children">Master</li>
	<ul>
		<li><a href="?module=profil">Profil</a></li>
		<li><a href="?module=users">Pengguna</a></li>
		<li><a href="?module=jenis">Jenis Simpanan</a></li>
		<li><a href="?module=anggota">Anggota</a></li>
	</ul>
</ul>
<ul class="">
	<li>Transaksi</li>
	<ul>
		<li><a href="?module=simpanan">Simpanan</a></li>
		<li><a href="?module=penarikan">Penarikan</a></li>
		<li><a href="?module=pinjaman">Pinjaman</a></li>
		<li><a href="?module=bayar">Bayar Pinjaman</a></li>
	</ul>
</ul>
<ul class="">
	<li>Laporan</li>
	<ul>
		<li><a href="?module=lap-anggota">Anggota</a></li>
		<li><a href="?module=lap-simpanan">Simpanan</a></li>
		<li><a href="?module=lap-pinjaman">Pinjaman</a></li>
		<li><a href="?module=lap-kreditmacet">Hutang Anggota</a></li>
		<li><a href="?module=lap-kegiatan">Kegiatan Sehari-hari</a></li>
	</ul>
</ul>