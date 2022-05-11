<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Siswa</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../assets/img/study.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/fontawesome-free-6.1.1-web/css/all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color:#009d4c;">
	
    <?php
    session_start();
    ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login-process.php" method="post">
					<span class="login100-form-title p-b-43">
						Login Siswa
					</span>
					<?php
                    if (isset($_SESSION['error'])) {
                    ?>
                    <div class="alert alert-danger">
                        <?= $_SESSION['error'] ?>
                    </div>
                    <?php
                    }
                    ?>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: Guruku@gmail.com">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Email or Username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<input type="submit" value="Login" class="login100-form-btn" name="login">
					</div>
					<div class="text-center mt-3">
						belum punya akun? <a href="registrasi.php" class="text-success">Daftar</a>
					</div>
					<h5 class="text-secondary mt-5 pt-3 text-center">Guruku | Copyright &copy2022</h5>
				</form>

				<div class="login100-more" style="background-image: url('../../assets/img/annie-spratt-4-4WPFLVhAY-unsplash.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="../../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../../assets/vendor/bootstrap/js/popper.js"></script>
	<script src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="../../assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../../assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../../assets/js/main.js"></script>

</body>
</html>