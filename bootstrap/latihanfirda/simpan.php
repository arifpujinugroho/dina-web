<?php
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$usia=$_POST['usia'];
$query=mysql_query("update biodata set nama='$nama', alamat='$alamat', usia='$usia' where id='$id'");
if($query){
 echo "Berhasil update data ke database ";
 ?><a href="tabel.php">Lihat data di Tabel</a><?php
}else{
 echo "Gagal update data";
 echo mysql_error();
}
?> 