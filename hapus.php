<?php include("masuk.php"); ?>
<?php
include("config.php");
    //ambil id dari query string
    $id=$_GET['id'];

    //buat query hapus
    $sql="DELETE FROM calon_siswa WHERE id=".$id;
    $query=mysqli_query($db,$sql);
?>
