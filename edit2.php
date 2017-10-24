<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Kelas</title>
	<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.min.css" rel="stylesheet">
		<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.css" rel="stylesheet">
			<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.css" rel="stylesheet">
				<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<?php
include ('koneksi.php');
$id = $_GET['id'];
$mhs = mysqli_query ($koneksi, "SELECT * FROM kelas WHERE id = '$id'");
$data = mysqli_fetch_array ($mhs);
?>
<center><h2>Edit Data Kelas</h2></center>
<fieldset style="width: 50%; margin: auto;">
	<legend>Form Edit Biodata Kelas</legend>
	<form action="savedit2.php" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id'];?>">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="kelas" type="text" class="form-control" name="kelas" placeholder="Nama Kelas">
  </div><br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="wali_kelas" type="text" class="form-control" name="wali_kelas" placeholder="Nama Wali Kelas">
  </div>
<div class="form-group">
  <label for="sel1">Nama Jurusan:</label>
  <?php
			include ('koneksi.php');
			$jurusan = mysqli_query($koneksi, "SELECT * FROM jurusan");
			?>
  <select name="nmjurusan"  class="form-control" id="sel1">
  	<option>-</option>
  <?php
				foreach ($jurusan as $data) {
				?>
				<option value="<?php echo $data['id'];?>">
					<?php echo $data['jurusan']?>
				</option>
				<?php
			}?>
  </select>
</div>
		
		<p>
			<input type="submit" value="Simpan" class="btn btn-success">
		</p>
	</form>
</fieldset>
<br><center><a href="kelas.php" class="btn btn-primary">KEMBALI</a></center>
</body>
</html>
