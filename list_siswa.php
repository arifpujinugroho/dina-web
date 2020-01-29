<?php include("config.php"); ?>
<?php include("masuk.php"); ?>
<div class="container">
    <table class="table table-sm table-hover table-striped table-bordered">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <?php
        $no = 1;
        $sql = "SELECT *FROM calon_siswa";
        $query = mysqli_query($db, $sql);
        $no = 0;
        while($siswa=mysqli_fetch_array($query)){
            echo "<tr>";
        $no++;
        // echo "<td>".$siswa['id']."</td>";
        echo "<td>".$no."</td>";
        echo "<td>".$siswa['nama']."</td>";
        echo "<td>".$siswa['alamat']."</td>";
        echo "<td>".$siswa['jenis_kelamin']."</td>";
        echo "<td>".$siswa['agama']."</td>";
        echo "<td>".$siswa['sekolah_asal']."</td>";

        echo "<td>";
        echo "<button class='editUser btn btn-sm btn-warning' data-id='".$siswa['id']."' data-nama='".$siswa['nama']."' data-alamat='".$siswa['alamat']."' data-jns='".$siswa['jenis_kelamin']."' data-sekolah='".$siswa['sekolah_asal']."' data-agama='".$siswa['agama']."'>Edit</button> ";
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
        $('#alamat').val($(this).data('alamat'));
        $('#agama').val($(this).data('agama'));
        $('#sekolah_asal').val($(this).data('sekolah'));
        $('#jenis_kelamin').val($(this).data('jns'));
        $('#iduser').val($(this).data('id'));
        $('#modal-title').html('Edit '+nama);
        $('#submit').hide();
        $('#edit').show();
        $('#modelId').modal('show');
    });

$('.hapusUser').click(function(){
        var nama = $(this).data('nama');
        $('#nama').val(nama);
        $('#iduser').val($(this).data('id'));
        $('#hapus-title').html('Hapus '+nama+'?');
        $('#hapus-body').html('Apakah anda yakin ingin menghapus <strong class="text-danger">'+nama+'</strong>?');
        $('#hapusModal').modal('show');
    });
</script>