<?php  

	session_start();
  
  	if(!isset($_SESSION["login"]))
  
  	header("location: ../login.php");

	include 'functions.php';

	$id 	= $_GET['id'];

	if (hapusujisaring($id) > 0)
	{
		echo 	"<script>
					alert('Data Berhasil Dihapus');
					document.location.href = 'dataujisaring.php';
				</script>";
	} else
	{
		echo 	"<script>
					alert('Data Gagal Dihapus');
					document.location.href = 'dataujisaring.php';
				</script>";

				mysqli_error($koneksi);
	}

?>