<?php
    include '../../config/koneksi.php';
    if(isset($_POST['daftar'])){
        session_start();
		$nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama']))));
    	$username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username']))));
		$email = htmlentities(htmlspecialchars(strip_tags(trim($_POST['email']))));
    	$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
    	$kelas = $_POST['kelas'];
		
        $cekUser=mysqli_query($koneksi,"SELECT *FROM siswa WHERE username='$username' OR email='$email'");

        if(mysqli_num_rows($cekUser) > 0){
            
            $_SESSION['error'] = "Username atau email telah tersedia";
            header("Location: registrasi.php");
        }
        else{
            if($password == $confirmpassword){
				$password=sha1($password);
                $query = mysqli_query($koneksi,"INSERT INTO siswa VALUES (NULL,'$kelas','$nama','$email','$username','$password','$kelas')");

                echo "<script>alert('Berhasil membuat akun');</script>";
                echo "<script>window.location.href='login.php';</script>";
                
            }else{
                $_SESSION['error'] = "Password Anda tidak cocok";
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi | Siswa</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../assets/img/study.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
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
	ob_start();
    ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-43">
						Registrasi Siswa
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
					
					<div class="wrap-input100 validate-input" data-validate = "Harap isikan dengan email yang valid">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Harap isikan dengan nama lengkap">
						<input class="input100" type="text" name="nama">
						<span class="focus-input100"></span>
						<span class="label-input100">Nama Lengkap</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Harap isikan username">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
			
					<div class="wrap-input100 validate-input" data-validate="Harap isikan password">
						<input onblur="checkLength(this)" class="input100" type="password" name="password" maxlength="255">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					<span id="invalid" class="text-danger"></span>
					<div class="wrap-input100 validate-input" data-validate="Harap isikan password">
						<input class="input100" type="password" name="confirmpassword">
						<span class="focus-input100"></span>
						<span class="label-input100">Konfirmasi Password</span>
					</div>

					<div class="mb-3">
						<label for="kelas" class="form-label text-secondary">Kelas</label>
						<select name="kelas" id="kelas" class="form-select fs-4 bg-transparent pt-3 pb-3">
							<?php
							$kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
							foreach ($kelas as $data) {
							?>
								<option value="<?= $data['id_kelas'] ?>"><?= $data['nama_kelas'] ?></option>
							<?php
							}
							?>
						</select>
					</div>
					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Setuju dengan syarat & ketentuan
							</label>
						</div>
					</div>
			
					<div class="container-login100-form-btn">
						<input type="submit" value="Daftar" class="login100-form-btn" name="daftar">
					</div>
					<div class="text-center mt-3">
						Sudah punya akun? <a href="login.php" class="text-success text-decoration-none">Login</a>
					</div>
					<h5 class="text-secondary mt-5 pt-3 text-center">Guruku | Copyright &copy2022</h5>
				</form>

				<div class="login100-more" style="background-image: url('../../assets/img/clay-banks-GX8KBbVmC6c-unsplash.jpg');">
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

<!-- cek maksimal karakter -->
<script>
	function checkLength(el){
		if(el.value.length <=6){
			document.getElementById("invalid").innerHTML = "Password harus lebih dari 6 karakter";
		}
	}
</script>

</body>
</html>