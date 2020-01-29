<?php
$host="localhost";
$user="root";
$password="";
$database="db_cc1";
$koneksi=mysql_connect($host,$user,$password);
mysql_select_db($database,$koneksi);
//cek koneksi
if($koneksi){
	echo "koneksi berhasil";
	}else{
	echo "gagal koneksi";

	}
?> 
