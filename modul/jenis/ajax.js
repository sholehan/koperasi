// JavaScript Document
$(document).ready(function(){
	$(function(){
		$('button').hover(
			function() { $(this).addClass('ui-state-hover'); }, 
			function() { $(this).removeClass('ui-state-hover'); }
		);
	});
	$('#form_input').dialog({
		    title: 'Input Data',  
			width: 450,   
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

	$("#tampil_data").load('modul/jenis/tampil_data.php');

	$('#tambah').click(function(){
		$(".input").val('');								
		$('#form_input').dialog('open');
		return false;
	});
	function simpan(){
		var id		= $("#id").val();
		var jenis	= $("#jenis").val();
		var jml		= $("#jml").val();
		
		if(id.length==0){
			alert('Maaf, ID tidak boleh kosong');
			$("id").focus();
			return false();
		}
		if(jenis.length==0){
			alert('Maaf, Jenis tidak boleh kosong');
			$("#jenis").focus();
			return false();
		}
		$.ajax({
			type	: "POST",
			url		: "modul/jenis/simpan.php",
			data	: "id="+id+
					"&jenis="+jenis+
					"&jml="+jml,
			success	: function(data){
				$("#tampil_data").load('modul/jenis/tampil_data.php');
				$("#form_input").dialog("close"); 
			}
		});
	}
});