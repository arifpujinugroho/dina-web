<?php include("config.php"); ?>
<?php include("masuk.php"); ?>
<div class="container">
    <table class="table table-sm table-hover table-striped table-bordered">
        <thead>
            <tr class="text-center">
                <th>Kode Anggota</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody class="text-center">
        <?php
        $sql = "SELECT *FROM anggota";
        $query = mysqli_query($db, $sql);
        while($siswa=mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$siswa['kode_anggota']."</td>";
        echo "<td>".$siswa['nama']."</td>";
        echo "<td>".$siswa['Jenis_Kelamin']."</td>";
        echo "<td>".$siswa['kelas']."</td>";
        echo "<td>".$siswa['alamat']."</td>";
        echo "<td>".$siswa['no_hp']."</td>";

        echo "<td>";
        echo "<button class='editUser btn btn-sm btn-warning' 
        data-id='".$siswa['id']."' 
        data-kode='".$siswa['kode_anggota']."' 
        data-nama='".$siswa['nama']."'
        data-jns='".$siswa['Jenis_Kelamin']."'
        data-kelas='".$siswa['kelas']."'   
        data-alamat='".$siswa['alamat']."' 
        data-hp='".$siswa['no_hp']."'>Edit</button> ";
        echo "<button class='hapusUser btn btn-sm btn-danger' data-id='".$siswa['id']."' data-nama='".$siswa['nama']."'>Hapus</button>";
        echo "</td>";
        echo "</tr>";
        }
        ?>
        </tbody>
    </table>
<p> Total:<?php echo mysqli_num_rows($query) ?> </p>
</div>

<script>
$('.editUser').click(function(){
        var nama = $(this).data('nama');
        $('#nama').val(nama);
        $('#Jenis_Kelamin').val($(this).data('jns'));
        $('#kelas').val($(this).data('kelas'));
        $('#alamat').val($(this).data('alamat'));
        $('#idnya').val($(this).data('id'));
        $('#kode_anggota').val($(this).data('kode'));
        $('#no_hp').val($(this).data('hp'));
        $('#modal-title').html('Edit '+nama);
        $('#submit').hide();
        $('#edit').show();
        $('#modelId').modal('show');
    });

$('.hapusUser').click(function(){
        var nama = $(this).data('nama');
        $('#nama').val(nama);
        $('#idnya').val($(this).data('id'));
        $('#hapus-title').html('Hapus '+nama+'?');
        $('#hapus-body').html('Apakah anda yakin ingin menghapus <strong class="text-danger">'+nama+'</strong>?');
        $('#hapusModal').modal('show');
    });
</script>