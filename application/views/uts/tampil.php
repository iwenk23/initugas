<!DOCTYPE html>
<html>
<head>
	<title>UTS</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: green">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="<?php echo site_url('CController') ?>" class="nav-link active">Home</a>
			<a href="<?php echo site_url('CController/tambah') ?>" class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link">Irwan Apriandi</a>
		</div>
	</nav>
	<div class="alert alert-warning text-center mt-0">
		DATA JURUSAN
	</div>
	<div class="container">
		<div class="container">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Id_17</th>
						<th>Kolom Jurusan</th>
						<th>Kolom Kelas</th>
						<th>Kolom Isi</th>
					</tr>

				</thead>
				<tbody>
					<?php foreach ($isi as $key) {
						?>
						<tr>
							<td><?php echo $key->id_17; ?></td>
							<td><?php echo $key->kolom_jurusan; ?></td>
							<td><?php echo $key->kolom_kelas; ?></td>
							<td><?php echo $key->kolom_isi; ?></td>

						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</body>
	</html>