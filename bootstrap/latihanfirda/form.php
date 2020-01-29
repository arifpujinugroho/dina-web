<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
	<form action="proses.php" method="post">
		<table class="container table table-success text-primary table-striped table-hover table-border">
			<tr>
				<td class="text-danger">
					Nama
				</td>
				<td>
					<input type="text" name="nama" size="20" class=" btn-info">
				</td>
			</tr>
			<tr>
				<td class="text-danger">
					Alamat
				</td>
				<td><textarea cols="20" rows="5" name="alamat" class=" btn-info"></textarea></td>
			</tr>
			<tr>
				<td class="text-danger">
					Usia
				</td>
				<td><input type="text" name="usia" size="20" class="btn-info"></td>
			</tr>
			<tr>
				<td><input type="submit" name="proses" value="Proses" class="btn btn-primary"></td>
				<td><input type="reset" value="Batal" class="btn btn-danger"></td>
			</tr>
		</table>




	</form>
</body>
</html>