<?php 
include "inc/inc_koneksi.php";

//anti sql-injection ??
function anti_injection($data){
	$filter = mysql_escape_string(stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
	return $filter;
} 

$username = anti_injection($_POST['username']);
$password = anti_injection(md5($_POST['password']));

if (!ctype_alnum($username) OR !ctype_alnum($password)){
	//gagal login
	header('Location:index.php');
} else {
	//berhasil
	$login = mysql_query("SELECT * FROM users WHERE user_id='$username' AND password='$password'");
	$ketemu = mysql_num_rows($login);

	if ($ketemu > 0){
		//ketemu!
		

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

		$r = mysql_fetch_array($login); //satu row saja
		

		//simpan di session
		$_SESSION['namauser'] = $r['user_id'];
		$_SESSION['passuser'] = $r['password'];
		$_SESSION['namalengkap'] = $r['namalengkap'];
		$_SESSION['level'] = $r['level'];
		$_SESSION['cabang'] = $r['cabang'];
		$_SESSION['foto'] = $r['foto'];

		//diarahkan ke halaman HOME


		header('Location:media.php?module=home');
	} else {
		//tidak ketemu
		//diarahkan ke index.php
		?>
		<script type="text/javascript">
			alert('Maaf, username atau password anda salah.');
			//arahkan ke hlm login
			window.location.href = 'index.php';
		</script>
		<?php
	}
}








?>