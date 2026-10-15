<form method="post" action="<?= base_url('datamaster/delete_relawan_post') ?>">
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <h6>Hapus Item ini ?</h6>
                <input type="hidden" readonly="true" name="id_relawan" id="did_relawan" class="form-control">
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col-md-2">
                <button type="submit" class="btn bg-success">HAPUS</button>
            </div>
        </div>
    </div>
</form>