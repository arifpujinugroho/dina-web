
$(document).ready(function(){
    //jika id="cetak" di click
    $("#cetak").click(function(){
      $("#content").load('cetak.php');
      $('#jumbotron').html('DATA CALON SISWA BARU');
    });

    $("#pendaftar").click(function(){
      $("#content").load('list_siswa.php');
      $('#jumbotron').html('Siswa yang sudah mendaftar');
    });
    
    $("#tambah-baru").click(function(){
      $("#content").load('form_daftar.php');
      $('#jumbotron').html('SMK Coding');
    });

    $('#tambahdata').click(function(){
        $('#nama').val('');
        $('#alamat').val('');
        $('#agama').val('');
        $('#sekolah_asal').val('');
        $('#jenis_kelamin').val('');
        $('#iduser').val('');
        $('#submit').show();
        $('#edit').hide();
        $('#modal-title').html('Tambah Data');
        $('#modelId').modal('show');
    });

    $('#submit').click(function(){
        var nama = $('#nama').val();
        var alamat = $('#alamat').val();
        var agama = $('#agama').val();
        var sekolah_asal = $('#sekolah_asal').val();
        var jenis_kelamin = $('#jenis_kelamin').val();

        $.post("proses_pendaftaran.php", {
                nama: nama,
                alamat: alamat,
                agama: agama,
                sekolah_asal: sekolah_asal,
                jenis_kelamin: jenis_kelamin 
            })
            .done(function() {
                $('#modelId').modal('hide');
                $("#content").load('list_siswa.php');
            })
            .fail(function() {
                alert('Oopss.. Error! Gagal menambah data '+nama);
            }); 
    });

    $('#edit').click(function(){
        var nama = $('#nama').val();
        var alamat = $('#alamat').val();
        var agama = $('#agama').val();
        var sekolah_asal = $('#sekolah_asal').val();
        var jenis_kelamin = $('#jenis_kelamin').val();
        var id = $('#iduser').val();

        $.post("proses_edit.php", {
                id: id,
                nama: nama,
                alamat: alamat,
                agama: agama,
                sekolah_asal: sekolah_asal,
                jenis_kelamin: jenis_kelamin 
            })
            .done(function() {
                $('#modelId').modal('hide');
                $("#content").load('list_siswa.php');
            })
            .fail(function() {
                alert('Oopss.. Error! Gagal mengedit data '+nama);
            }); 
    });

    $('#hapus').click(function(){
        var id = $('#iduser').val();

        $.get("hapus.php", {
                id: id
            })
            .done(function() {
                $("#content").load('list_siswa.php');
                $('#hapusModal').modal('hide');
            })
            .fail(function() {
                alert('Oopss.. Error! Data gagal dihapus')
            }); 
    });
  });