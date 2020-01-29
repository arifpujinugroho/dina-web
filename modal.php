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
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" id="nama" class="form-control">
                    <input type="hidden" id="iduser">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" id="alamat" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="agama">Agama</label>
                  <select class="form-control" id="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                  </select>
                </div>
                <div class="form-group">
                    <label>Sekolah Asal</label>
                    <input type="text" id="sekolah_asal" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" id="jenis_kelamin" >
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
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
                <button id="hapus" class="btn btn-primary btn-danger btn-sm">Hapus</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>