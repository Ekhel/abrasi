
<form method="post" action="<?= base_url('datamaster/update_distrik_post') ?>">
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <label for="nama_distrik">NAMA DISTRIK</label>
                <input type="hidden" name="id_distrik" id="xid_distrik" class="form-control">
                <input type="text" name="distrik" id="xdistrik" class="form-control">
            </div>
            
            <div class="col-md-4">
                <label for="kode_wil">KODE WILAYAH</label>
                <input type="text" name="kode_wil" id="xkode_wil" class="form-control">
            </div>

            <div class="col-md-4">
                <label for="kode_wil">WILAYAH PEMBANGUNAN</label>
                <select name="wp" id="xwp" class="form-control">
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="nama_koordis">NAMA KOORDINATOR</label>
                <input type="text" name="nama_koordis" id="xnama_koordis" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="kontak_koordis">NO KONTAK</label>
                <input type="text" name="kontak_koordis" id="xkontak_koordis" class="form-control">
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