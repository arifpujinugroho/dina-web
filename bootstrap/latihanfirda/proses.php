<!DOCTYPE html>
<html>
<head>
	<title>hhhh</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>


</head>
<body class="bg-danger">


</body>
</html>
<?php 
include "koneksi.php";
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$usia=$_POST['usia'];
$query=mysql_query("INSERT INTO biodata(nama, alamat, usia) value('$nama', '$alamat', '$usia')");

if($query){
		echo "Berhasil input data ke database";
		?><a href="tabel.php" class="btn btn-info">Lihat data di Tabel</a><?php
}else{
	echo "Gagal input data";
	echo mysql_error();
}
?>
