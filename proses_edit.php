<?php include("masuk.php"); ?>
<?php
include("config.php");

  // ambil data dari Formulir
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jk = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $sekolah = $_POST['sekolah_asal'];

  // buat query update
  $sql = "UPDATE calon_siswa SET nama='$nama',alamat='$alamat',jenis_kelamin='$jk',agama='$agama',sekolah_asal='$sekolah' WHERE id=$id";
  $query = mysqli_query($db,$sql);
?>
