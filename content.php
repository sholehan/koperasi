<?php 
// cek modul yang akan digunakan
include 'inc/inc_koneksi.php';
include 'inc/fungsi_koperasi.php';

$mod = $_GET['module'];
	if ($mod == 'home'){
		//tampilkan home
		$nama = namakoperasi(1);
		date_default_timezone_set("Asia/Jakarta");
	//echo "<h2>Selamat Datang</h2>";


		



		/*
	
		
			$a = mysql_query(" SELECT * FROM users ");
							
							
			$c = mysql_fetch_array($a);
			while ($b=mysql_fetch_array($a)) {
				$pecah = explode("-",$b['tgl_lahir']);
				$tgl_skrg = date("d");
				$bln_skrg = date("m");
				
			if (($bln_skrg == $pecah[1]) and ($tgl_skrg == $pecah[2]) and ($_SESSION['namauser'] == $c['user_id'])) {
				//	echo " dan Selamat Ulang Tahun "."<b>$_SESSION[namalengkap]</b>, Semoga Panjang Umur dan Banyak Rejeki ";
				} else  {
				// echo "Hai, $_SESSION[namalengkap]</b> [ $_SESSION[level] ] Selamat datang di Sistem Informasi <b>$nama</b> ";
					}
			}
			*/
echo "<br><br>";

if ($_SESSION['level']== 1) {
	$jabatan = 'Administrator';
} elseif ($_SESSION['level']==2) {
	$jabatan = 'Kepala';
} elseif ($_SESSION['level']==3) {
	$jabatan = 'Customer Service';
} elseif ($_SESSION['level']==4) {
	$jabatan = 'Kasir';
} elseif ($_SESSION['level']==5) {
	$jabatan = 'Kolektor';
}

				 echo "Hai, $_SESSION[namalengkap]</b> [$jabatan] Selamat datang di Sistem Informasi <b>$nama</b> ";
			echo "<br>";
		// Jika level = super admin, tampil semua menu
		if ($_SESSION['level'] == '1') {
			echo "<table class='list'>
				<thead><td class='center' colspan='5'><center>Control Panel </center></td></trhead>
				<tbody>
					<tr>
						<td width='120' align='center'> <a href='media.php?module=jenis'><img src='images/jenis.png' border='none's><br><b>Jenis Simpanan</b></td>
						<td width='120' align='center'> <a href='media.php?module=anggota'><img src='images/anggota.png' border='none's><br><b>Anggota</b></td>
						<td width='120' align='center'> <a href='media.php?module=users'><img src='images/users.png' border='none's><br><b>Pengguna/Users</b></td>
						<td width='120' align='center'> <a href='media.php?module=profil'><img src='images/profil.png' border='none's><br><b>Profil</b></td>
					</tr>

					<tr>
						<td width='120' align='center'> <a href='media.php?module=simpanan'><img src='images/simpanan.png' border='none's><br><b>Simpanan</b></td>
						<td width='120' align='center'> <a href='media.php?module=penarikan'><img src='images/penarikan.png' border='none's><br><b>Tarik Tunai</b></td>
						<td width='120' align='center'> <a href='media.php?module=pinjaman'><img src='images/pinjaman.png' border='none's><br><b>Pinjaman</b></td>
						<td width='120' align='center'> <a href='media.php?module=bayar'><img src='images/kredit.png' border='none's><br><b>Bayar Pinjaman</b></td>
					</tr>
				</tbody>
				</tbody>
			</table>";
		}

	} elseif ($mod == 'profil') {
		include 'modul/profil/profil.php';

	}	elseif ($mod == 'users') {
		include 'modul/pengguna/pengguna.php';

	}elseif ($mod == 'anggota') {
		include 'modul/anggota/anggota.php';
			
	}elseif ($mod == 'jenis') {
		include 'modul/jenis/jenis.php';
			
	}elseif ($mod == 'simpanan') {
		include 'modul/simpanan/simpanan.php';
			
	}elseif ($mod == 'penarikan') {
		include 'modul/penarikan/penarikan.php';
			
	}elseif ($mod == 'pinjaman') {
		include 'modul/pinjaman/pinjaman.php';
			
	}elseif ($mod == 'bayar') {
		include 'modul/bayar/bayar.php';
			
	}elseif ($mod == 'edit_profil'){
		include 'modul/edit_profil/profil.php';
	}

	 else {
		echo '<b>Maaf, Sementara Aplikasi masih belum tersedia!</b>';
	}

 ?>