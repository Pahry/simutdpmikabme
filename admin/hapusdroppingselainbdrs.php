<?php  

  	session_start();
  
  	if(!isset($_SESSION["login"]))
  
  	header("location: ../login.php");

	include 'functions.php';

	$id 	= $_GET['id'];
	$query	= hapusdroppingselainbdrs("DELETE FROM droppingselainbdrs WHERE iddropping = $id");

	if ($query > 0) 
	{
		echo "<script>
				alert('Data Berhasil Dihapus');
				document.location.href = 'datadroppingselainbdrs.php';
			  </script> ";
	}else
	{
		echo "<script>
				alert('Data Gagal Dihapus');
				document.location.href = 'datadroppingselainbdrs.php';
			  </script>";
	}
?>