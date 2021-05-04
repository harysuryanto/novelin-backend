<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- <link rel="icon" type="image/png" href="<?= base_url() ?>images/admin/icons/title.png"> -->
	<title><?= $this->title ?></title>
	<!-- Style biasa -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style-sementara.css">
</head>
<body>

<h1>Curhatin dong</h1>
<small style="color: red;">Untuk sementara ini curhat hanya bisa dibuat dan tidak bisa diubah ataupun dihapus.</small>

<form action="<?= base_url() ?>curhat/simpan" method="post">
	<textarea name="isi" cols="30" rows="10" placeholder="Curhatin dong di sini..." required autofocus></textarea><br />
	Aku merasa <input type="text" name="mood" placeholder="Mood kamu saat ini" required /><br />
	
	<button type="submit">KIRIM</button>
</form>

</body>
</html>