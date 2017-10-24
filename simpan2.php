<?php
include ('koneksi.php');
$a =$_POST['kelas'];
$b =$_POST['nmjurusan'];
$c =$_POST['wali_kelas'];
$tambah = "INSERT INTO kelas SET kelas ='$a',jurusan_id='$b',wali_kelas='$c'";
mysqli_query($koneksi,$tambah);
header("location:kelas.php");
?>		