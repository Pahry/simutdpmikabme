<?php  

  	session_start();
  
  	if(!isset($_SESSION["login"]))
  
  	header("location: ../login.php");

	include 'functions.php';

	$idpetugasutdpmi = $_GET['idpetugasutdpmi'];

	if(hapuspetugasutdpmi($idpetugasutdpmi) > 0 ) 
	{
		echo "<script>
				alert('Data berhasil dihapus');
            	document.location.href = 'datapetugasutdpmi.php';
              </script>" ;
	} 
	else
	{
      echo "<script>
              alert('Data gagal dihapus');
              document.location.href = 'datapetugasutdpmi.php';
            </script>" ;
	}
?>