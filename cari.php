<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <?php
      include 'config.php';
      ?>

      <form method="get">
        <label>PILIH jenis kelamin</label>
        <input type="text" name="Jenis_Kelamin">
        <input type="submit" value="Search">
      </form>

  <br/><br/>

  <table border="1" style="width:70%">
    <tr>
      <th>Kode Anggota</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Kelas</th>
      <th>Alamat</th>
      <th>No HP</th>
    </tr>
    <?php

    if(isset($_GET['Jenis_Kelamin'])) {
      $jenkel = $_GET['Jenis_Kelamin'];
      $sql = mysqli_query($db,"select *from anggota where Jenis_Kelamin like '%".$Jenis_Kelamin."%'");
    } else {
      $sql = mysqli_query($db,"select*from anggota");
    }

    while ($data = mysqli_fetch_array($sql)){
    ?>
    <tr>
      <td><?php echo $data['kode_anggota']; ?> </td>
      <td><?php echo $data['nama']; ?> </td>
      <td><?php echo $data['Jenis_Kelamin']; ?> </td>
      <td><?php echo $data['kelas']; ?> </td>
      <td><?php echo $data['alamat']; ?> </td>
      <td><?php echo $data['no_hp']; ?> </td>
    </tr>

    <?php
    }
    ?>
  </table>
  </center>
  </body>
</html>
