
$(document).ready(function(){
    $("#cetak").click(function(){
      $("#content").load('cetak.php');
      $('#jumbotron').html('DATA CALON ANGGOTA BARU');
    });

    $("#cari").click(function(){
        $("#content").load('cari.php');
        $('#jumbotron').html('Pencarian');
      });

    $("#pendaftar").click(function(){
      $("#content").load('list_siswa.php');
      $('#jumbotron').html('Anggota yang sudah mendaftar');
    });
    
    $("#tambah-baru").click(function(){
      $("#content").load('form_daftar.php');
      $('#jumbotron').html('Perpustakaan');
    });

    $('#tambahdata').click(function(){
        $('#kode_anggota').val('');
        $('#nama').val('');
        $('#Jenis_Kelamin').val('');
        $('#kelas').val('');
        $('#alamat').val('');
        $('#submit').show();
        $('#edit').hide();
        $('#modal-title').html('Tambah Data');
        $('#modelId').modal('show');
    });

    $('#submit').click(function(){
        var kode_anggota = $('#kode_anggota').val();
        var nama = $('#nama').val();
        var alamat = $('#alamat').val();
        var kelas = $('#kelas').val();
        var no_hp = $('#no_hp').val();
        var Jenis_Kelamin = $('#Jenis_Kelamin').val();

        $.post("proses_pendaftaran.php", {
                kode_anggota : kode_anggota,
                nama: nama,
                alamat: alamat,
                kelas: kelas,
                no_hp: no_hp,
                Jenis_Kelamin: Jenis_Kelamin, 
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
        var kelas = $('#kelas').val();
        var no_hp = $('#no_hp').val();
        var Jenis_Kelamin = $('#Jenis_Kelamin').val();
        var kode_anggota = $('#kode_anggota').val();

        $.post("proses_edit.php", {
                kode_anggota: kode_anggota,
                nama: nama,
                alamat: alamat,
                kelas: kelas,
                no_hp: no_hp,
                Jenis_Kelamin: Jenis_Kelamin, 
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
        var kode_anggota = $('#kode_anggota').val();

        $.get("hapus.php", {
                kode_anggota: kode_anggota
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