<?php 
	
	include 'function.php';

	if(isset($_POST['submit'])) 
	{
		if (registrasi($_POST))
		{
		 	echo 	"<script>
		 				alert('Username Berhasil Ditambahkan');
		 				document.location.href='login.php';
		 			</script>";

		}
		else
		{
		 	echo 	"<script>
		 				alert('Username Gagal Ditambahkan');
		 				document.location.href='daftar.php';
		 			</script>";

		}

	}
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar SIM UTD PMI</title>
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
						Registrasi User <br>SIM PD UTD PMI Kabupaten Muara Enim
					</span>
				</div>

				<form action="" method="POST" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Masukkan Username" maxlength="8">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Masukkan Password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Konfirmasi Password</span>
						<input class="input100" type="password" name="password2" placeholder="Konfirmasi Password">
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
							Daftar
						</button>
						<a href="login.php" class="login100-form-btn" type="submit" name="submit" style="background-color:red">
							 Login
						</a>
					</div>
				</form>
				
			</div> <!-- Wrap Login 100 -->

		</div> <!-- Container Login 100 -->

	</div> <!-- Limiter -->
		
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