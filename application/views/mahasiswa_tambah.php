<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>

	<h1>Tambah Mahasiswa</h1>
	<hr>
	<a href="<?php echo site_url('mahasiswa') ?>">kembali</a>
	<form>
		<h6>Nim</h6>
		<input type="number" name="nim"><br>

		<h6>Nama</h6>
		<input type="text" name="nama_mahasiswa"> <br>

		<input type="submit" name="submit" value="simpan">
	</form>

</body>
</html>