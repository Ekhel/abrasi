<form method="post" action="<?= base_url('datamaster/delete_dpt_post') ?>">
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <h6>Hapus Item ini ?</h6>
                <input type="hidden" readonly="true" name="id_kampung" id="did_kampung" class="form-control">
                <input type="hidden" readonly="true" name="id_dpt" id="did_dpt" class="form-control">
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