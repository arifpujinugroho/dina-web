<?php include("masuk.php"); ?>
<?php
include("config.php");
    //ambil kode dari query string
    $kode_anggota=$_GET['kode'];

    //buat query hapus
    $sql="DELETE FROM anggota WHERE kode=".$kode_anggota;
    $query=mysqli_query($db,$sql);
?>
