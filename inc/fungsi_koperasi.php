<?php 

// untuk mengambil informasi koperasi dari database
function namakoperasi($id){
	$sql = "SELECT * FROM profile WHERE id='$id'";

	$data = mysql_fetch_array(mysql_query($sql));
	$row = mysql_num_rows(mysql_query($sql));

	if ($row > 0){
		$hasil = $data['koperasi'];
	} else {
		$hasil = "";
	}

	return $hasil;
}

function simpanan($anggota){
	$sql = mysql_query("SELECT sum(jumlah) as total FROM `simpanan` WHERE noanggota='$anggota'");
	$row = mysql_num_rows($sql);
	if ($row > 0){
		$data = mysql_fetch_array($sql);
		$hasil = $data['total'];
	} else {
		$hasil = 0;
	}

	return $hasil;
}

function pengambilan($anggota){
	$sql = mysql_query("SELECT sum(jumlah) as total FROM `pengambilan` WHERE noanggota='$anggota'");
	$row = mysql_num_rows($sql);
	if ($row > 0){
		$data = mysql_fetch_array($sql);
		$hasil = $data['total'];
	} else {
		$hasil = 0;
	}

	return $hasil;
}

function saldo($anggota){
	$simpanan = simpanan($anggota);
	$pengambilan = pengambilan($anggota);
	$saldo = $simpanan - $pengambilan;
	return $saldo;
}



function sisaAngsuran($anggota){
	$sql = "SELECT b.noanggota, sum(a.angsuran+a.bunga) as total \n"
    . "FROM pinjaman_detail as a \n"
    . "JOIN pinjaman_header as b\n"
    . "ON a.id_pinjam=b.id_pinjam\n"
    . "WHERE jumlah_bayar=0 AND noanggota='$anggota'";

    $q = mysql_query($sql);
    $row = mysql_num_rows($q);

    if ($row>0){
    	$data = mysql_fetch_array($q);
    	$hasil = $data['total'];
    } else {
    	$hasil = 0;
    }

    return $hasil;
}

function jmlBayar($no){
	//cicilan yang harus dibayar
	$sql = "SELECT sum(angsuran+bunga) as total FROM pinjaman_detail WHERE id_pinjam='$no'";
	$data = mysql_fetch_array(mysql_query($sql));
	$row = mysql_num_rows(mysql_query($sql));

	if ($row > 0){
		$hasil = $data['total'];
	} else {
		$hasil = 0;
	}

	return $hasil;
}

function cicilan($no){
	//cicilan yang sudah dibayar
	$sql = "SELECT sum(jumlah_bayar) as total FROM pinjaman_detail WHERE id_pinjam='$no'";
	$data = mysql_fetch_array(mysql_query($sql));
	$row = mysql_num_rows(mysql_query($sql));

	if ($row > 0){
		$hasil = $data['total'];
	} else {
		$hasil = 0;
	}

	return $hasil;
}

function alamatkoperasi($id){
	$sql = "SELECT * FROM profile WHERE id='$id'";
	$data = mysql_fetch_array(mysql_query($sql));
	$row = mysql_num_rows(mysql_query($sql));

	if ($row>0){
		$hasil = $data['alamat'] . " " . $data['kota'] . "<br/>" .
				"Phone: " . $data['hp'] . "<br/>" .
				"Fax: " . $data['fax'] . "<br/>" .
				"Email: " . $data['email'] . "<br/>";
	} else {
		$hasil = "";
	}

	return $hasil;
}

function kotakoperasi($id){
	$sql = "SELECT * FROM profile WHERE id='$id'";
	$data = mysql_fetch_array(mysql_query($sql));
	$row = mysql_num_rows(mysql_query($sql));

	if ($row>0){
		$hasil = $data['kota'];
	} else {
		$hasil = "";
	}

	return $hasil;
}

function cariNama($nomor){
	$sql = "SELECT * FROM anggota WHERE noanggota='$nomor'";
	$data = mysql_fetch_array(mysql_query($sql));
	$row = mysql_num_rows(mysql_query($sql));

	if ($row>0){
		$hasil = $data['namaanggota'];
	} else {
		$hasil = "";
	}

	return $hasil;
}

function cariJenis($id){
	$sql = "SELECT * FROM jenis_simpan WHERE id_jenis='$id'";
	$data = mysql_fetch_array(mysql_query($sql));
	$row = mysql_num_rows(mysql_query($sql));

	if ($row>0){
		$hasil = $data['jenis_simpanan'];
	} else {
		$hasil = "";
	}

	return $hasil;
}

/*
function DendaKetelambatan($id){
	$sql="SELECT * FROM pinjaman_header WHERE id_pinjam='$id' ";
	$da = mysql_fetch_array($sql);
	}	

==
*/
?>