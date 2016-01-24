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

$('#tgl').datepicker({
		dateFormat:'dd-mm-yy',
		format:'dd-mm-yyyy',
		changeYear: true,
		changeMonth: true
	});
	
});