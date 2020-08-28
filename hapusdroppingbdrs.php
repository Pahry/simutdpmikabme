<?php  

  	session_start();
  
  	if(!isset($_SESSION["login"]))
  
  	header("location: ../login.php");

	include 'functions.php';

	global $koneksi;
	
	$id = $_GET['id'];
	
	if(hapusdroppingbdrs("DELETE from droppingbdrs WHERE iddroppingbdrs = $id") > 0)
	{
      echo "<script>
              alert('Data Berhasil Dihapus');
              document.location.href = 'datadroppingbdrs.php';
            </script>";
	}else
	{
      echo "<script>
              alert ('Data Gagal Dihapus');
              document.location.href = 'datadroppingbdrs.php';
            </script>";
      echo mysqli_error($koneksi);
	}


?>