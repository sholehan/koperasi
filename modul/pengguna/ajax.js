// JavaScript Document
$(document).ready(function(){
$('#namalengkap').keyup(function(e){
		var isi = $(e.target).val();
		$(e.target).val(isi.toUpperCase());
		carianggota();
		
	});

	$(function(){
		$('button').hover(
			function() { $(this).addClass('ui-state-hover'); }, 
			function() { $(this).removeClass('ui-state-hover'); }
		);
	});

	$('#form_input').dialog({
		    title: 'Input Data',  
			width: 420,  
			height: 340,   
			closed: true,  
			cache: false,  
			modal: true,
			buttons:[{
				text:'Simpan',
				iconCls:'icon-save',
				handler:function(){
					//alert('edit')
					simpan();
				}
			},{
				text:'Tutup',
				iconCls:'icon-logout',
				handler:function(){
					//alert('help')
					$("#form_input").dialog('close');
				}
			}]	

	});


	$("#tampil_data").load('modul/pengguna/tampil_data.php');
	
	$('#tambah').click(function(){
		$(".input").val('');								
		$('#form_input').dialog('open');
		return false;
	});

	$('#tgl').datepicker({
		dateFormat:'dd-mm-yy',
		format:'dd-mm-yyyy',
		changeYear: true,
		changeMonth: true
	});

		
	
	function simpan(){
		var userid		= $("#userid").val();
		var nama		= $("#namalengkap").val();
		var tempat		= $("#tempat").val();
		var tgl			= $("#tgl").val();
		var pwd			= $("#pwd").val();
		var level		= $("#level").val();
		
		if(userid.length==0){
			alert('Maaf, USER ID tidak boleh kosong');
			$("#userid").focus();
			return false();
		}
		if(nama.length==0){
			alert('Maaf, Nama Lengkap tidak boleh kosong');
			$("#namalengkap").focus();
			return false();
		}
		/*
		if(pwd.length==0){
			alert('Maaf, Password tidak boleh kosong');
			$("#pwd").focus();
			return false();
		}*/
		$.ajax({
			type	: "POST",
			url		: "modul/pengguna/simpan.php",
			data	: "userid="+userid+
					"&nama="+nama+
					"&pwd="+pwd+
					"&tempat="+tempat+
					"&tgl="+tgl+
					"&level="+level,
			success	: function(data){
				$("#tampil_data").load('modul/pengguna/tampil_data.php');
				$("#form_input").dialog("close"); 
			}

		});
	

	}

});