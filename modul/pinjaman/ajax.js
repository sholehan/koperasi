//ajax
$(document).ready(function(){
	$(function(){
		$('button').hover(
			function() {
				$(this).addClass('ui-state-hover');
			},
			function() {
				$(this).removeClass('ui-state-hover');
			}
		);
	});

	$('#form_isian').hide();

	cariNomor();
	$('#tampil_data1').load('modul/pinjaman/tampil_data1.php');

	$('#nomor').keyup(function(e){
		var isi = $(e.target).val();
		//hrf kapital
		$(e.target).val(isi.toUpperCase());
		cariAnggota(isi);
		cariSisa(isi);
	});

	$('#tgl').datepicker({
 		dateFormat: 'dd-mm-yy',
 		format: 'dd-mm-yyyy',
	});

	$('#tgl1').datepicker({
 		dateFormat: 'dd-mm-yy',
 		format: 'dd-mm-yyyy',
	});

	$('#tgl2').datepicker({
 		dateFormat: 'dd-mm-yy',
 		format: 'dd-mm-yyyy',
	});

	$('#jenis').change(function(){
		var cari = $('#jenis').val();
		cariJenis(cari);
	});

	$('#tambah').click(function(){
		$('#form_isian').show();
		$('#menu_tombol1').hide();
	});

	$('#tutup').click(function(){
		$('#form_isian').hide();
		$('#menu_tombol1').show();
	});

	$('#bunga').keypress(function(data){
		if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)){
			return false;
		}
	});

	$('#jml').keypress(function(data){
		if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)){
			return false;
		}
	});

	function cariNomor(){
		$.ajax({
			type: 'GET',
			url: 'modul/pinjaman/cari_nomor.php',
			dataType: 'json',
			success: function(data){
				$('#no').val(data.no);
			}
		});
	}

	function cariJenis(cari){
		$.ajax({
			type: 'POST',
			url: 'modul/simpanan/cari_jenis.php',
			data: 'cari='+cari,
			dataType: 'json',
			success: function(data){ 
				$('#jml').val(data.jml);
			}
		})
	}

	function cariAnggota(isi){
		$.ajax({
			type: 'POST',
			url: 'modul/pinjaman/cari_anggota.php',
			data: 'cari='+isi,
			success: function(data){
				$('#info_anggota').html(data);
			}
		});
	}

	function cariSimpananAnggota(isi){
		$.ajax({
			type: 'GET',
			url: 'modul/simpanan/tampil_data1.php',
			data: 'cari='+isi,
			success: function(data){
				$('#tampil_data1').html(data);
			}
		});
	}

	$('#simpan').click(function(){
		simpanHeader();
	});

	function cariSisa(cari){
		$.ajax({
			type: 'POST',
			url: 'modul/pinjaman/cari_sisaangsuran.php',
			data: 'cari='+cari,
			dataType: 'json',
			success: function(data){ 
				var sisa = data.sisa;
				if (sisa > 0){
					hilang();
				} else {
					muncul();
				}
			}
		});
	}

	function hilang(){
		$('#tgl').val('');
		$('#lama').val('');
		$('#bunga').val('');
		$('#jml').val('');
		$('#tgl').hide();
		$('#lama').hide();
		$('#bunga').hide();
		$('#jml').hide();
	}

	function muncul(){
		$('#tgl').show();
		$('#lama').show();
		$('#bunga').show();
		$('#jml').show();
	}

	function simpanHeader(){
		var no = $('#no').val();
		var nomor = $('#nomor').val();
		var tgl = $('#tgl').val();
		var lama = $('#lama').val();
		var jml = $('#jml').val();
		var bunga = $('#bunga').val();

		if (no.length==0){
			alert('Maaf Nomor Pinjaman tidak boleh kosong');
			$('#no').focus();
			return false;
		}
		if (nomor.length==0){
			alert('Maaf Nomor Anggota tidak boleh kosong');
			$('#nomor').focus();
			return false;
		} 
		if (tgl.length==0){
			alert('Maaf Tanggal tidak boleh kosong');
			$('#tgl').focus();
			return false;
		}
		if (lama.length==0){
			alert('Maaf Lama Pinjaman tidak boleh kosong');
			$('#lama').focus();
			return false;
		}
		if (jml.length==0){
			alert('Maaf Jumlah tidak boleh kosong');
			$('#jml').focus();
			return false;
		}
		if (bunga.length==0){
			alert('Maaf Bunga tidak boleh kosong');
			$('#bunga').focus();
			return false;
		}

		$.ajax({
			type: 'POST',
			url: 'modul/pinjaman/simpan_header.php',
			data: "no="+no+
					"&nomor="+nomor+
					"&tgl="+tgl+
					"&lama="+lama+
					"&bunga="+bunga+
					"&jml="+jml,
			success: function(data){
				simpanDetail();
			}
		});
	}

	function simpanDetail(){
		var no = $('#no').val(); 
		var tgl = $('#tgl').val();
		var lama = $('#lama').val();
		var jml = $('#jml').val();
		var bunga = $('#bunga').val();
		var angsuran = parseInt(jml)/parseInt(lama);
		var t_bunga = (parseInt(angsuran)*parseInt(bunga))/100;

		//loop untuk memasukkan row detail pinjaman
		for (var i = 1; i <= lama; ++i){
			$.ajax({
				type: 'POST',
				url: 'modul/pinjaman/simpan_detail.php',
				data: "no="+no+
						"&i="+i+
						"&angsuran="+angsuran+ 
						"&t_bunga="+t_bunga+
						"&tgl="+tgl,
				success: function(data){ 	
					$('#tampil_data1').load('modul/pinjaman/tampil_data_cicilan.php?cari='+no);
				}
			});
		}
	}

	$('#baru').click(function(){
		var cari = '';
		$('.input').val('');
		$('#id').val('AUTO');
		$('#nomor').focus();
		cariAnggota(cari);
		cariSimpananAnggota(cari);
	});

	$('#cetak').click(function(){
		var kode = $('#nomor').val();
		if (kode.length == 0){
			alert('Maaf, Nomor Anggota tidak boleh kosong');
			$('#nomor').focus();
			return false;
		}
		window.open('modul/laporan/cetak-storan.php?kode='+kode);
	});

	$('#cari2').click(function(){
		var tgl1 = $('#tgl1').val();
		var tgl2 = $('#tgl2').val();

		if (tgl1.length == 0){
			alert('Maaf, tanggal tidak boleh kosong');
			$('#tgl1').focus();
			return false;
		}
		if (tgl2.length == 0){
			alert('Maaf, tanggal tidak boleh kosong');
			$('#tgl2').focus();
			return false;
		}

		cariData2(tgl1,tgl2);
	});

	function cariData2(tgl1, tgl2){
		$.ajax({
			type: 'POST',
			url: 'modul/pinjaman/tampil_data1.php',
			data: 'tgl1='+tgl1+'&tgl2='+tgl2,
			success: function(data){
				$('#tampil_data1').html(data);
			}
		});
	}

});