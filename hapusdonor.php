<?php 			 

	include 'functions.php';

	$id 		= $_GET['id'];

	if(hapuspendonor("DELETE FROM pendonor WHERE idpendonor = $id") > 0 )
	{
		echo "<script>
              alert('Data Berhasil Dihapus');
              document.location.href = 'datapendonor.php';
            </script>";
	}else
	{
      echo "<script>
              alert ('Data Gagal Dihapus');
              document.location.href = 'datapendonor.php';
            </script>";
      echo mysqli_error($koneksi);
	}


?>