<?php 
 

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include_once "inc/inc_koneksi.php";

if(!isset($_SESSION['namauser']) and !isset($_SESSION['level'])){
	die("<script>alert('Anda tidak berhak masuk secara ilegal, silahkan Login Dahulu!');
	     </script> <script>location.href='index.php'</script>");
} 

 ?>