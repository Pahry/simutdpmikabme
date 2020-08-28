	

<?php 
	
	session_start();

	$koneksi 	= mysqli_connect("localhost","root","","simutdpmi");


	if(isset($_SESSION["login"]))
	{
		header("location: admin/datapendonor.php");
		exit;
	}
		
	if(isset($_POST['submit'])) 
	{

		 $username = $_POST["username"];
		 $password = $_POST["password"];

		 $result = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
		

		// Cek Username
		if (mysqli_num_rows($result) === 1) 
		{
	 	  	// Cek password
	 		$row = mysqli_fetch_assoc($result);
		 			
	 		// Set Session
	 		$_SESSION["login"] = true;

		 	header("location:admin/datapendonor.php");	
		
		 	exit;
		}

			$error = true;
		}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login SIM UTD PMI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vassets/endor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
	
	<?php if(isset ($error) ) : ?>
	
		<script> alert('Username / Password Salah');</script>
	
	<?php endif;?>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Form Login Petugas <br>UTD PMI Kabupaten Muara Enim
					</span>
				</div>

				<form action="" method="POST" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Masukkan username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Masukkan password">
						<span class="focus-input100"></span>
					</div>

<!-- 					<div class="flex-sb-m w-full p-b-30">
							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
								<label class="label-checkbox100" for="ckb1">
								Ingat Saya
								</label>
							</div> 
						</div>-->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							Masuk
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="aassets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="aassets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="aassets/vendor/bootstrap/js/popper.js"></script>
	<script src="aassets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="aassets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="aassets/vendor/daterangepicker/moment.min.js"></script>
	<script src="aassets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="aassets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="aassets/js/main.js"></script>

</body>
</html>