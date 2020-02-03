<?php include("masuk.php"); ?>
<?php
include("config.php");
    //ambil kode dari query string
    $id_anggota=$_GET['id'];

    //buat query hapus
    $sql="DELETE FROM anggota WHERE id=".$id_anggota;
    $query=mysqli_query($db,$sql);
?>
