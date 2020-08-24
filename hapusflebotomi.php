<?php  

include 'functions.php';

	if(hapusflebotomi($_GET['id']) > 0 )
	{
		echo "<script>
				alert('Data berhasil dihapus');
            	document.location.href = 'dataflebotomi.php';
              </script>" ;
	}else
	{
      echo "<script>
              alert('Data gagal dihapus');
            </script>" ;
              // document.location.href = 'dataflebotomi.php';
	}

?>