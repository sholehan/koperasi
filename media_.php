<?php 
//HOMEPAGE
session_start();
 include "inc/fungsi_login.php";
 ?>
 <!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
	<head>
		<title>SISTEM INFORMASI KOPERASI</title>
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="css/AdminLTE.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

		<link rel="stylesheet" href="css/style_content.css" type="text/css"/>
        <link rel="stylesheet" href="css/style_table.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/themes/cupertino/easyui.css">
        <link rel="stylesheet" type="text/css" href="css/themes/icon.css">
        <link rel="stylesheet" type="text/css" href="css/ui/themes/base/jquery.ui.all.css">



		<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.easyui.min.js"></script>

        <script type="text/javascript" src="js/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="js/jquery.ui.core.js"></script>
        <script type="text/javascript" src="js/ui.datepicker-id.js"></script>
        <script type="text/javascript" src="js/jquery.ui.datepicker.js"></script> 

	</head>





	<body>

		<!-- profil Koperasi -->
		<div class="navbar-header" id="header">
			<div>
				<img src="images/logo_koperasi_85.png" />
			</div>
			<div id="judul">
				<?php 
				 	include 'inc/inc_koneksi.php';
				 	$q = mysql_query("SELECT * FROM profile WHERE id='1'");

				 	while ($r = mysql_fetch_array($q)) {
				 		echo "<h1>" . $r['koperasi'] . "</h1>";
				 		echo "<p><b> Sistem Informasi Koperasi Simpan Pinjam </b></p>";
				 		echo "<p>" . $r['alamat'] . "</p>";
				  	} 
			  	?>
			</div>
		</div>


		<div id="menu_atas">
			<a href="?module=edit_profil">My User</a>
			<a href="?module=home">Depan</a>
			<a href="logout.php">Keluar</a>
		</div>



		<div class="col-sm-2 sidenav" id="menu_kiri">
			<?php include 'menu.php'; ?>
		</div>




		<div class="col-sm-9 text-left" id="page-content">
			<div title="Nama: <?php echo $_SESSION['namalengkap'] ."! ". ' - ' . $_SESSION['level']; ?>">
				<?php include 'content.php'; ?>
			</div>
		</div>


	</body>
</html>