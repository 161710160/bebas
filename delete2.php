 <?php
include ('koneksi.php');
$id =$_GET ['id'];

$delete = " DELETE FROM kelas WHERE id='$id'";
mysqli_query($koneksi,$delete);
header('location:kelas.php');
?> 