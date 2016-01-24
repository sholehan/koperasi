//javascript
$(document).ready(function(){
	$('#simpan').click(function(){
		simpan();
	});

	function simpan(){
		//ambil datanya dari form
		var id 			= $('#id').val();
		var koperasi	= $('#koperasi').val();
		var alamat 		= $('#alamat').val();
		var kota 		= $('#kota').val();
		var hp 			= $('#hp').val();
		var fax			= $('#fax').val();
		var email 		= $('#email').val();
		var pimpinan 	= $('#pimpinan').val();

		//cek dulu apakah id & nama koperasi tidak kosong

		if (id.length == 0){
			alert('Maaf, ID tidak boleh kosong');
			$('#id').focus();
			return false;
		}
		if (koperasi.length == 0){
			alert('Maaf, Nama Koperasi tidak boleh kosong');
			$('#koperasi').focus();
			return false;
		}
		if (alamat.length == 0) {
			alert('Maaf, Alamat tidak boleh kosong');
			$('#alamat').focus();
			return false;
		}
		if (kota.length == 0) {
			alert('Maaf, Kota tidak boleh kosong');
			$('#kota').focus();
			return false;
		}
		if (hp.length == 0) {
			alert('Maaf, Phone tidak boleh kosong');
			$('#hp').focus();
			return false;
		}
		if (pimpinan.length == 0) {
			alert('Maaf, Kepala Cabang tidak boleh kosong');
			$('#pimpinan').focus();
			return false;
		}


		//melakukan save ke database
		$.ajax({
			type : "POST",
			url : "modul/profil/simpan.php",
			data : "id="+id+
					"&koperasi="+koperasi+
					"&alamat="+alamat+
					"&kota="+kota+
					"&hp="+hp+
					"&fax="+fax+
					"&email="+email+
					"&pimpinan="+pimpinan,
			success : function(data){
				//data ini asalnya dari database
				//response
				//tampilkan status bhw data sukses disimpan
				console.log(data);
				alert('Data sukses disimpan');
			}
		});
		/*
	$('#hp').keyup(function(e){
		if (data.which != 8 && data.which!=0 && (data.which<48 || data.which > 57)){
			alert('HP harus angkat');
			return false;
		}
	*/
	}
});