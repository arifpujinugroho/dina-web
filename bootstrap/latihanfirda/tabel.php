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
<body class="bg-dark">
	<div class="jumbotron bg-primary text-center text-white ">
		<h2>TABEL</h2>
	</div>
	<div class="container text-center">
		<div class="spinner-grow text-muted"></div>
		<div class="spinner-grow text-primary"></div>
		<div class="spinner-grow text-success"></div>
		<div class="spinner-grow text-warning"></div>
		<div class="spinner-grow text-danger"></div>
		<div class="spinner-grow text-secondary"></div>
		<div class="spinner-grow text-dark"></div>
		<div class="spinner-grow text-light"></div>
	</div>
	<div class="text-white text-center">
	<?php

	include"koneksi.php";
	$query=mysql_query("select * from biodata");
	$jumlah=mysql_num_rows($query);
	echo "jumlah data ada:".$jumlah;
?>
 	<table border="4" class="container table table-primary text-primary table-striped table-hover ">
	<tr>
	<th>nomor</th><th>nama</th>
	<th>alamat</th><th>usia</th>
	<th>aksi</th>
	</tr>
<?php
$c=0;
	while($row=mysql_fetch_array($query)){
?>
 <tr>
	<td><?php echo $c=$c+1;?></td>
	<td><?php echo $row["nama"];?></td>
	<td><?php echo $row["alamat"];?></td>
	<td><?php echo $row["usia"];?></td>
 <td>
	<a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Delete</a>
	<a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-info">Update</a>
 </td>
<?php

}

?>
</div>
</table><br/>

	<a href="form.php" class="btn btn-warning">input data form</a>




</body>
</html>




