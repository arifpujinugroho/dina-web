<?php include("masuk.php"); ?>
<?php
include("config.php");

//ambil data dari formulir
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$jk=$_POST['jenis_kelamin'];
	$agama=$_POST['agama'];
	$sekolah=$_POST['sekolah_asal'];


	//buat query
	$sql="INSERT INTO calon_siswa(nama, alamat, jenis_kelamin, agama, sekolah_asal)VALUE('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
	$query=mysqli_query($db,$sql);
 ?>
