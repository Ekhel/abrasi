<form method="post" action="<?= base_url('datamaster/update_dpt_post') ?>">
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="Distrik">Distrik</label>
                <input type="text" name="distrik" id="xnamadistrik" class="form-control" readonly="true">
            </div>
            <div class="col-md-6">
                <label for="kampung">Kampung</label>
                <input type="text" name="kampung" id="xnamakampung" class="form-control" readonly="true">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-5">
                <label for="nik">NIK</label>
                <input type="hidden" name="id_dpt" id="xid_dpt">
                <input type="hidden" name="id_distrik" id="xid_distrik">
                <input type="hidden" name="id_kampung" id="xid_kampung">
                <input type="text" name="nik" id="xnik" class="form-control">
            </div>
            <div class="col-md-7">
                <label for="nama_distrik">Nama</label>
                <input type="text" name="nama" id="xnama" class="form-control">
            </div>
            
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <label for="jk">JEKEL</label>
                <select name="jk" id="xjekel" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="ttl">Tanggal Lahir</label>
                <input type="date" name="ttl" id="xtgllahir" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <button type="submit" class="btn bg-success">UPDATE</button>
            </div>
        </div>
    </div>
</form>