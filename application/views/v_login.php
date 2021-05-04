<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- <link rel="icon" type="image/png" href="<?= base_url() ?>images/admin/icons/title.png"> -->
	<title><?= $this->title ?></title>
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>
<body>

<div class="container">
	<div class="login">
		<h1 class="login-heading">
			Login
		</h1>

		<form action="<?= base_url() ?>login/proses_login" onsubmit="return validasi_input(this)" method="post">
			<input type="text" name="username" class="input-txt" placeholder="Username" required autofocus />
			<input type="password" name="password" class="input-txt" placeholder="Password" required />

			<div class="login-footer">
				<!-- <a href="<?= base_url() ?>lupa-password" class="lnk">
					Forgot the password?
				</a> -->
				<a href="<?= base_url() ?>login/daftar"><button type="button">Daftar</button></a>
				<button type="submit" class="btn btn--right">Log in</button>
				<!-- <br>Password : admin123
				<br>MD5 : <?= md5("admin123") ?> -->
			</div>
		</form>
	</div>
</div>

<!-- validasi input -->
<script>
	function validasi_input(form){
		pola_username=/^[a-zA-Z0-9\_\-]{8,100}$/;
		if (!pola_username.test(form.username.value)){
			alert ('Username minimal 8 karakter dan hanya boleh huruf atau angka!');
			form.username.focus();
			return false;
		}
		return (true);
	}
</script>

</body>
</html>