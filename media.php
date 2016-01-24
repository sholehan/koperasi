<?php 
//HOMEPAGE
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

 include "inc/fungsi_login.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KOPERASI SIMPAN PINJAM SUMBER DANA MANDIRI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.3.3.5.min.css">
    <script src="js/jquery1.11.3.min.js"></script>
    <script src="js/bootstrap3.3.5.min.js"></script>

		
	<!--	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> -->

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

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 950px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

      <div class="navbar-brand">
	      	 <?php 
			
			date_default_timezone_set("Asia/Jakarta");
			$xs = "Selamat Datang di KSP SUMBER DANA MANDIRI";
			
			$j = time();
			$hour = date("G",$j);

			if ($hour>=0 && $hour<=10)
			{
			echo " Selamat Pagi $xs";
			}
			elseif ($hour >=10 && $hour<=14)
			{
			echo "Selamat Siang $xs";
			}
			elseif ($hour >=14 && $hour<=17)
			{
			echo "Selamat Sore  $xs";
			}
			elseif ($hour >=17 && $hour<=18)
			{
			echo "Selamat Petang  $xs";
			}
			elseif ($hour >=19 && $hour<=23)
			{
			echo "Selamat Malam  $xs";
			}

	        ?>
	      </div>


    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	      
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="?module=home"><span class="glyphicon glyphicon-home"></span> DEPAN</a></li>
        <li><a href="?module=edit_profil"><span class="glyphicon glyphicon-home"></span> My User</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> KELUAR</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-left">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <?php include 'menu.php'; ?>
    </div>


    <div class="col-sm-9 text-left" > 
     <div title="Nama: <?php echo $_SESSION['namalengkap'] ."! ". ' - ' . $_SESSION['level']; ?>">
				<?php include 'content.php'; ?>
			</div>
    </div>
    


  </div>
</div>

<footer class="container-fluid text-center">
  <p>COPYRIGHT @2016 GPL </p>
</footer>

</body>
</html>
