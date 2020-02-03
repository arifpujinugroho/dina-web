<?php include("masuk.php"); ?>
<?php
include("config.php");

  // ambil data dari Formulir
  $id = $_POST['id'];
  $kode = $_POST['kode_anggota'];
  $nama = $_POST['nama'];
  $jk = $_POST['Jenis_Kelamin'];
  $kelas = $_POST['kelas'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];

  // buat query update
  $sql = "UPDATE anggota SET id='$id',kode_anggota='$kode',nama='$nama',jenis_kelamin='$jk',kelas='$kelas',alamat='$alamat',no_hp='$no_hp'";
  $query = mysqli_query($db,$sql);
?>
