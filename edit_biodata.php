<?php 
	include 'koneksi.php';
	$id = $_GET['id'];

	$sql =  "SELECT * FROM `mahasiswa` WHERE `mahasiswa`.`id` = $id";
	$query = mysqli_query($conn,$sql);
	$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Biodata</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Edit Biodata</h1>
		<form action="./update_biodata.php" method="POST">
			<div class="form-group">
				<label for="">Nama</label>
				<input type="hidden" name="id" value="<?= $data['id'] ?>">
				<input type="text" name="nama" class="form-control" value="<?= $data['nama']; ?>" required="">
			</div>
			<div class="form-group">
				<label for="">TTL</label>
				<input type="text" name="ttl" class="form-control" value="<?= $data['ttl']; ?>" required="">
			</div>
			<div class="form-group">
				<label for="">Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?= $data['alamat']; ?>" required="">
			</div>
			<input type="submit" name="update" value="Update" class="btn btn-primary">
			<a href="./tampil_biodata.php" class="btn btn-outline-success">Lihat Biodata</a>
		</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>