<?php
include "koneksi.php";
$id=$_GET['id'];
$query=mysql_query("select * from biodata where id='$id'");
?>
<form action="simpan.php" method="post">
<table border="1">
<?php
while($row=mysql_fetch_array($query)){
 ?>
 <input type="hidden" name="id" value="<?php echo $id;?>"/>
 <tr>
 <td>Nama</td><td><input type="text" name="nama" value="<?php echo $row['nama'];?>" /></td>
 </tr>
 <tr>
 <td>Alamat</td>
<td><textarea cols="20" rows="5" name="alamat"><?php echo $row['alamat'];?></textarea></td>
 </tr>
 <tr><td>Usia</td><td><input type="text" name="usia" value="<?php echo $row['usia'];?>" /></td>
 </tr>
 <tr><td><input type="submit" value="Simpan" name="simpan"></td>
 </tr>
 <?php
}
?>
</table>
</form> 
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
<body class="bg-info">
	


</body>
</html>