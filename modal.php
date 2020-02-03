<div class="container toast mt-3">
    <div class="toast-header"></div>
    <div class="toast-body"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>        
            <div class="modal-body">
                <form action="proses_pendaftaran.php" method="POST">
                <div class="form-group">
                    <label>Kode Anggota</label>
                    <input type="text" name="kode" id="kode" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="Jenis_Kelamin" id="Jenis_Kelamin" >
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="kelas">Kelas</label>
                  <select class="form-control" name="kelas" id="kelas">
                    <option>X</option>
                    <option>XI</option>
                    <option>XII</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>NO HP</label>
                    <input type="text" id="no_hp" name="no_hp" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button id="submit" class="btn btn-success btn-sm">Daftar</button>
                <button id="edit" class="btn btn-warning btn-sm">Edit</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body" id="hapus-body">
            </div>
            <div class="modal-footer">
                <form action="hapus.php" method="post">
                <button id="hapus" class="btn btn-primary btn-danger btn-sm">Hapus</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>