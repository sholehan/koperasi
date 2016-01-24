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
	$('#tampil_data1').load('modul/bayar/tampil_data1.php');
 
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

	$("#cari_no").click(function(){
		//cari nomor pinjaman
		var cari = $("#no").val();
		cariPinjaman(cari);
	});

	function cariPinjaman(cari){
		$.ajax({
			type : "POST",
			url : "modul/bayar/cari.php",
			data : "cari="+cari,
			dataType: "json",
			success: function(data){
				if (data.tgl == ''){
					alert("Maaf, nomor pinjaman tidak ada / salah");
				} else {
					$("#nomor").val(data.nomor);
					$("#tgl").val(data.tgl);
					$("#lama").val(data.lama);
					$("#jml").val(data.jml);
					$("#bunga").val(data.bunga);

					cariAnggota(data.nomor);

					$('#tampil_data1').load("modul/bayar/tampil_data_cicilan.php?cari="+cari);
				}
			}
		});
	}

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
			url: 'modul/bayar/cari_anggota.php',
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