<?php 	 

  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");

	include 'functions.php';

  	$id     = $_GET['id'];   
  	
  	$query  = "DELETE FROM stokdarah WHERE idstokdarah=$id";
  	
  	if(hapusstokdarah($query) > 0)
	 {
		echo "<script>
              alert('Data berhasil dihapus');
              document.location.href = 'datastokdarah.php';
            </script>" ;
    }
      else
    {
      echo "<script>
              alert('Data gagal dihapus');
              document.location.href = 'datastokdarah.php';
            </script>" ;
            
      echo mysqli_error($koneksi);
	}
?>