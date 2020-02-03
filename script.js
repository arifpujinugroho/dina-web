
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

    $('#tambahdata').click(function(){
        $('#idnya').val(''); //ini lihat di modal baris 18 disana ada id=idnya.. nah klo di js jadinya #idnya
        $('#kode').val(''); // '#kode' ini disesuaikan dengan atribut id yang ada di inputnya. contoh ini #kode brarti milik file modal.php bris 21
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
        var kode_anggota = $('#kode').val();
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
        var id = $('#idnya').val();
        var no_hp = $('#no_hp').val();
        var Jenis_Kelamin = $('#Jenis_Kelamin').val();
        var kode_anggota = $('#kode').val();

        $.post("proses_edit.php", {
                id: id,
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
        var id = $('#idnya').val();

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