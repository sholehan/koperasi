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


	$('#nomor').keyup(function(e){
		var isi = $(e.target).val();
		//hrf kapital
		$(e.target).val(isi.toUpperCase());
		cariAnggota(isi);
		cariPenarikanAnggota(isi);
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

	function cariJenis(cari){
		$.ajax({
			type: 'POST',
			url: 'modul/penarikan/cari_jenis.php',
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
			url: 'modul/penarikan/cari_anggota.php',
			data: 'cari='+isi,
			success: function(data){
				$('#info_anggota').html(data);
			}
		});
	}

	function cariPenarikanAnggota(isi){
		$.ajax({
			type: 'GET',
			url: 'modul/penarikan/tampil_data1.php',
			data: 'cari='+isi,
			success: function(data){
				$('#tampil_data1').html(data);
			}
		});
	}

	$('#simpan').click(function(){
		simpan();
	});

	function simpan(){
		var no = $('#nomor').val();
		var tgl = $('#tgl').val();
		var jenis = $('#jenis').val();
		var jml = $('#jml').val();
		var info_anggota = $('#info_anggota').html();

		if (no.length==0){
			alert('Maaf Nomor Anggota tidak boleh kosong');
			$('#nomor').focus();
			return false;
		}
		if (info_anggota.length==0){
			alert('Maaf Nomor Anggota tidak valid');
			$('#nomor').focus();
			return false;
		}
		if (tgl.length==0){
			alert('Maaf Tanggal tidak boleh kosong');
			$('#tgl').focus();
			return false;
		}
		if (jenis.length==0){
			alert('Maaf Jenis Simpanan tidak boleh kosong');
			$('#jenis').focus();
			return false;
		}
		if (jml.length==0){
			alert('Maaf Jumlah tidak boleh kosong');
			$('#jml').focus();
			return false;
		}

		$.ajax({
			type: 'POST',
			url: 'modul/penarikan/simpan.php',
			data: "no="+no+
					"&tgl="+tgl+
					"&jenis="+jenis+
					"&jml="+jml,
			success: function(data){
				//load ulang tampilData1
				$('#tampil_data1').load('modul/penarikan/tampil_data1.php?cari='+no);

			}
		});
	}

	$('#baru').click(function(){
		var cari = '';
		$('.input').val('');
		$('#id').val('AUTO');
		$('#nomor').focus();
		cariAnggota(cari);
		cariPenarikanAnggota(cari);
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
			url: 'modul/penarikan/tampil_data2.php',
			data: 'tgl1='+tgl1+'&tgl2='+tgl2,
			success: function(data){
				$('#tampil_data2').html(data);
			}
		});
	}

	$('#cari3').click(function(){ 
		var cari = $('#txt_cari').val(); 
		cariData3(cari);
	});

	function cariData3(cari){
		$.ajax({
			type: 'POST',
			url: 'modul/penarikan/tampil_data3.php',
			data: 'cari='+cari,
			success: function(data){
				$('#tampil_data3').html(data);
			}
		});
	}
});