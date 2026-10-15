
<form method="post" action="<?= base_url('Dpt/update_disany_post') ?>">
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <label for="nama_distrik">BASELINE JOAN</label>
                <input type="hidden" name="id_distrik" id="xid_distrik" class="form-control">
                <input type="text" name="baseline_joan" id="xbaseline_joan" class="form-control">
            </div>
            
            <div class="col-md-4">
                <label for="kode_wil">TARGET UP</label>
                <input type="text" name="target_up" id="xtarget_up" class="form-control">
            </div>

            <div class="col-md-4">
                <label for="kode_wil">LEVEL</label>
                <select name="level_blt" id="xlevel" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
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