<?php include("masuk.php"); ?>
<?php
include("config.php");

//ambil data dari formulir
	$kode=$_POST['kode_anggota'];
	$nama=$_POST['nama'];
	$jk=$_POST['Jenis_Kelamin'];
	$kelas=$_POST['kelas'];
	$alamat=$_POST['alamat'];
	$no_hp=$_POST['no_hp'];


	//buat query
	$sql="INSERT INTO anggota(kode_anggota, nama, Jenis_Kelamin, kelas, alamat, no_hp)VALUE('$kode','$nama', '$jk', '$kelas', '$alamat', '$no_hp')";
	$query=mysqli_query($db,$sql);

	header('Location: home.php');
 ?>
