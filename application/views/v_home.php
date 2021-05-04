<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title><?= $this->title ?></title>
	<!-- Style biasa -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style-sementara.css">
	<!-- Style bagus -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/style_bagus/styles/style.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/style_bagus/bootstrap-4.3.1/css/bootstrap.min.css">
</head>
<body>

<h1>Hai, <?= $this->input->cookie('username') ?></h1>

<a href="<?= base_url() ?>logout"><button type="button" class="hapus">LOGOUT</button></a>

<h3>Kiriman</h3>
<?= $this->input->cookie('username') . "<br>"; ?>

<?php
	echo date('Y-m-d H:i:s', strtotime("+1 months", strtotime(date("Y-m-d H:i:s"))));
?>


<a href="<?= base_url() ?>curhat/buat"><button type="button" class="ubah">CURHAT DONG</button></a><br /><br />

<?php foreach ($tampil_curhat->result() as $ts): ?>
	<!-- <br />
	<div style="border: 1px solid #000;">
		<div><?= $ts->nama ?></div>
		<div><small>Merasa <?= $ts->mood ?></small></div>
		<div><small>Pada <?= $ts->tanggal_dibuat ?></small></div><br />
		<div><h3><?= $ts->isi ?></h3></div>
	</div> -->

	<div class="phone-screen">
		<div class="container">
			<!-- Konten -->
			<div class="col-sm-12 kiriman">
				<div class="col-12">
					<div class="row">
						<div class="col-3 foto-profil">
							<?php
								if($ts->jenis_kelamin == "pria")
									$foto_profil = "profil-pria.png";
								else
									$foto_profil = "profil-wanita.png";
							?>
							<img src="<?= base_url() ?>assets/style_bagus/images/<?= $foto_profil ?>">
						</div>
						
						<div class="col-9 nama-pengguna">
							<div class="nama"><?= $ts->nama ?></div>
							<div class="perasaan">Merasa <?= $ts->mood ?></div>
							<div class="perasaan">Pada <?= $ts->tanggal_dibuat ?></div>
						</div>
					</div>
				</div>

				<div class="col-12 isi-kiriman">
					<?php
						if(strlen($ts->isi) > 60)
							$isi_kiriman_panjang = 'class="panjang"';
						else
							$isi_kiriman_panjang = '';
					?>
					<p <?= $isi_kiriman_panjang ?>>
						<?= $ts->isi ?>
					</p>
				</div>

				<div class="col-12 aksi">
					<div class="row">
						<div class="col-4">
							<?php
								if(!$this->cek_suka($ts->id_curhat, $this->input->cookie('id_user'))) {
									// Tampilkan ini jika belum menyukai ?>
									<a href="<?= base_url() ?>curhat/suka/<?= $ts->id_curhat ?>">
										<div class="suka">SUKAI</div>
									</a> <?php
								} else {
									// Tampilkan ini jika sudah menyukai ?>
									<a href="<?= base_url() ?>curhat/batal_suka/<?= $ts->id_curhat ?>">
										<div class="suka">BATAL MENYUKAI</div>
									</a> <?php
								}
							?>
						</div>
						<div class="col-4">
							<div class="komentar"></div>
						</div>
						<div class="col-4">
							<div class="opsi"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>

	
</body>
</html>