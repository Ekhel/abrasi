<form method="post" action="<?= base_url('datamaster/create_dpt_post') ?>">
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="nama_distrik">NIK</label>
                <input type="hidden" readonly="true" name="id_distrik" value="<?= $kampung['id_distrik'] ?>">
                <input type="hidden" readonly="true" name="id_kampung" value="<?= $kampung['id_kampung'] ?>">
                <input type="text" name="nik" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="nama_distrik">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="ttl">Tgl Lahir</label>
                <input type="date" name="ttl" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="jk">JEKEL</label>
                <select name="jk" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <button type="submit" class="btn bg-success">SIMPAN</button>
            </div>
        </div>
    </div>
</form>