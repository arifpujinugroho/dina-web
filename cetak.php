<?php include("masuk.php"); ?>
<?php include('config.php'); ?>
<center>
    <table border="1" style="width: 70%">
        <tr class="text-center">
            <th>Kode Anggota</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No HP</th>
        </tr>
        <?php
        $sql = mysqli_query($db,"select *from anggota");
        while($data = mysqli_fetch_array($sql)) {
        ?>
        <tr class="text-center">
          <td> <?php echo $data['kode_anggota']; ?></td>
          <td> <?php echo $data['nama']; ?></td>
          <td> <?php echo $data['Jenis_Kelamin']; ?></td>
          <td> <?php echo $data['kelas']; ?></td>
          <td> <?php echo $data['alamat']; ?></td>
          <td> <?php echo $data['no_hp']; ?></td>
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
