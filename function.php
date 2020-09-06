<?php  

	$koneksi 	= mysqli_connect("localhost","root","","simutdpmi");

	function registrasi($data)
	{	
		global $koneksi;

		$username 	= strtolower(htmlspecialchars($data["username"]));
		$password 	= htmlspecialchars($data["password"]);
		$password2 	= htmlspecialchars($data["password2"]);

		$cekuser = mysqli_query($koneksi, "SELECT username FROM user WHERE username='$username'");

		if (mysqli_fetch_assoc($cekuser)) 
		 {
		 	echo 	"<script>
		 				alert('Username Sudah Terdaftar');
		 				document.location.href='daftar.php';
		 			</script>";

		 	return false;
		 }

		if ($password !== $password2) 
		 {
		 	echo 	"<script>
		 				alert('Password Tidak Sesuai');
		 				document.location.href='daftar.php';
		 			</script>";	

		 	return false;
		 }

		$password 	= password_hash($password, PASSWORD_DEFAULT);

		mysqli_query($koneksi,"INSERT INTO user VALUES ('','$username','$password')");

		return mysqli_affected_rows($koneksi);
	}
?>