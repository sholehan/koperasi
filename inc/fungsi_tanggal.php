<?php 
date_default_timezone_set("Asia/Jakarta");

function jin_date_sql($date){
	$exp = explode('-', $date); // pisah YYYY-MM-DD bertdarkan -
	if (count($exp) == 3){
		$date = $exp[2] . '-' . $exp[1] . '-' . $exp[0];
	}

	return $date;
}
?>