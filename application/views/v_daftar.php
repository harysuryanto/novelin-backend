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
			Daftar
		</h1>

		<form action="<?= base_url() ?>login/simpan_daftar" onsubmit="return validasi_input(this)" method="post">
			<input type="text" name="nama" class="input-txt" placeholder="Nama lengkap" autofocus /><br />
			<input type="text" name="username" class="input-txt" placeholder="Username" required /><br />
			<input type="password" name="password" class="input-txt" placeholder="Password" required /><br />
			<input type="email" name="email" class="input-txt" placeholder="Email" required /><br />
			<select name="jenis_kelamin">
				<option>Pilih jenis kelamin</option>
				<option value="pria">Pria</option>
				<option value="wanita">Wanita</option>
			</select><br />
			<input type="date" name="tanggal_lahir" class="input-txt" placeholder="Tanggal lahir" />

			<div class="login-footer">
				<button type="submit" class="btn btn--right">Daftar</button>
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