<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Kelas</title>
	<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.min.css" rel="stylesheet">
		<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.css" rel="stylesheet">
			<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.css" rel="stylesheet">
				<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<center>
	<h1 ><font color="#adejaja">Data Kelas</h1></font><p class="version">2016-2017</p>
<br>
<body bgcolor="black">
<ul class="nav nav-tabs nav-justified">
  <li role="presentation" class=""><a href="/CRUD/jurusan/jurusan.php" class="glyphicon glyphicon-thumbs-up">JURUSAN</a></li>
  <li role="presentation" class="active"><a href="/CRUD/kelas/kelas.php" class="glyphicon glyphicon-education">KELAS</a></li>
  <li role="presentation"><a href="/CRUD/siswa/siswa.php" class="glyphicon glyphicon-user">SISWA</a></li>
</ul>


<div class="container">
  <h2>Table Kelas</h2>          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nomor</th>
        <th>Nama Kelas</th>
        <th>Nama Jurusan</th>
        <th>Wali Kelas</th>
        <th colspan="3">Opsi</th>
      </tr>
    </thead>
 
<?php 
include('koneksi.php');
$ma = mysqli_query($koneksi,"SELECT kelas.id, kelas.kelas,kelas.wali_kelas,jurusan.jurusan FROM kelas JOIN jurusan ON jurusan.id=kelas.jurusan_id ");
$no = 1;
foreach ($ma as $data) {
	echo "<tr>
	<td>$no</td>
	<td>".$data ['kelas']."</td>
	<td>".$data['jurusan']."</td>	
	<td>".$data['wali_kelas']."</td>
	<td><a class='btn btn-success' href='tambah2.php?id=$data[id]'>Tambah</a></td>
	<td><a class='btn btn-info' href='edit2.php?id=$data[id]'>Edit</a></td>
	<td><a class='btn btn-danger'  href='delete2.php?id=$data[id]'>Delete</td>
	</tr>";
	$no++;
	}
 ?>
</table>
</body>
</h1>
</center>
</html>
