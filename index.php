
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<html>
<head>
	<title>Sistem Informasi Koperasi</title>
		<script type="text/javascript" src="js/jquery-1.9.1.js">
		</script>
		<script type="text/javascript">
		$(document)	.ready(function(){
			$('#username').focus();
			$('.text').val('')
		})


			function validasi (){
				var username = $('#username').val();
				var password = $('#password').val();
				// cek user/ pass apa ada yg ksng
				if (username.length==0) {
					alert('User tidak boleh kosong');
					$('#username').focus();
					return false;
				}
				if (password.length==0){
					alert('Password tidak boleh kosong');
					$('#password').focus();
					return false;
				}
				return true;
			}
		</script>
</head>

<body> <br><br>
	<p align="center">SISTEM INFORMASI TERPADU <?php include "inc/inc_koneksi.php"; 

	$q = mysql_query("SELECT * FROM profile WHERE id='1'");

				 	while ($r = mysql_fetch_array($q)) {
				 		echo "<p align='center'>" . $r['koperasi'] . "</p>";
				  	} 
	;?> </p>
	
	<form method="POST" action="cek_login.php" onsubmit ="return validasi(this)">
		<table align="center" bgcolor="aqua"> 
			<tr>
				<td> Username:</td>
				<td> <input type="text" id="username" name="username" class="text" /> </td>
			</tr>	
			<tr>
				<td> Password:</td>
				<td><input type="password" id="password" name="password" class="text" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button type="submit" name="submit">Login SISTEM</button></td>
			</tr>
		</table>		
	</form>
	<?php
	include "inc/inc_koneksi.php"; 

	$q = mysql_query("SELECT * FROM profile WHERE id='1'");
	while ($r = mysql_fetch_array($q)) {
		echo " <p align='center'>"  . "Kantor Pusat: " .  $r['alamat'] .  "</p>";
				  	} 
	?>
</body>
</html>