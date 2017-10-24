<?php
include ('koneksi.php');

$id = $_POST['id'];
$a = $_POST['kelas'];
$nama_jurusan = $_POST['nmjurusan'];
$b = $_POST['wali_kelas'];


$edit = "UPDATE kelas SET kelas='$a',jurusan_id='$nama_jurusan',wali_kelas='$b' WHERE id='$id'";
mysqli_query($koneksi,$edit);
header("location:kelas.php");
?>