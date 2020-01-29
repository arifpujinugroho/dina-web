<?php include("masuk.php"); ?>
<?php include('config.php'); ?>
<center>
    <table border="1" style="width: 70%">
        <tr class="text-center">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
        </tr>
        <?php
        $no = 1;
        $sql = mysqli_query($db,"select *from calon_siswa");
        while($data = mysqli_fetch_array($sql)) {
        ?>
        <tr>
          <td class="text-center"> <?php echo $no++; ?></td>
          <td> <?php echo $data['nama']; ?></td>
          <td> <?php echo $data['alamat']; ?></td>
          <td> <?php echo $data['jenis_kelamin']; ?></td>
          <td> <?php echo $data['agama']; ?></td>
          <td> <?php echo $data['sekolah_asal']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </center>
    <script>
      window.print();
    </script>
</body>
</html>
