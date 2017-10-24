<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KELAS</title>
	<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.min.css" rel="stylesheet">
		<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.css" rel="stylesheet">
			<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.css" rel="stylesheet">
				<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<h2 align="center">Tambah Kelas</h2>
<fieldset style="width: 50%; margin: auto;">
	<legend>Form Tambah Kelas</legend>
	<form action="simpan2.php" method="post">
		<p>
			Kelas<br />
			<input id="kelas" type="text" class="form-control" name="kelas" placeholder="Nama Kelas">
		</p>
		<p>
			Jurusan<br />
			<?php 
				include('koneksi.php');
			$z = mysqli_query($koneksi,"SELECT * FROM jurusan");?>
			<select name="nmjurusan"> PILIH JURUSAN
				<option>Pilih</option>
			<?php foreach ($z as $data){
			?>
			<option value="<?php echo $data['id'];?>">
			<?php
				echo $data['jurusan']
			?>
			</option>
			<?php } ?>
			</select>
		</p>
		<p>
			Wali Kelas<br />
			<input id="wali_kelas" type="text" class="form-control" name="wali_kelas" placeholder="Nama Wali Kelas">
		</p>
		<p>
				<input type="submit" value="Simpan" class="btn btn-info">
		<input type="reset" value="Reset" class="btn btn-success" onclick="return confirm('Hapus Data Yang Telah Di Input?')">
	</p>
	</form>
</fieldset>
<br />
<center><a href="kelas.php" class="btn btn-info">&Lt; Kembali Ke Tabel</a></center>		
 </body>
 </html>