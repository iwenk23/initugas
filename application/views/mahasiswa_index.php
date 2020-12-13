<!DOCTYPE html>
<html>
<head>
	<title>MAHASISWA</title>
</head>
<body>

	<h1>MAHASISWA</h1>
	<h3>Selamat datang, <?php echo $nama_lengkap ?></h3>
	<h3>Jenis Kelamin, <?php echo $jenis_kelamin ?></h3>
	<h3>Nim, <?php echo $nim ?></h3>
	<hr>
	<a href="<?php echo site_url('mahasiswa/tambah') ?>">Tambah Data</a>
	<table border="1">
		<tr>
			<th>Nim</th>
			<th>Nama</th>
		</tr>
		<?php foreach ($mahasiswa as $key): ?>
			<tr>
				<td><?php echo $key['nim'] ?></td>
				<td><?php echo $key['nama'] ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>