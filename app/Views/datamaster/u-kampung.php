
<!-- <div class="container-fluid py-4">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <h6> <i class="fa fa-edit"></i> EDIT KAMPUNG</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="container-fluid">
                
            </div>
            
        </div>
    </div>
</div> -->

<form method="post" action="<?= base_url('datamaster/update_kampung_post') ?>">
    <div class="form-group">
        <div class="row">
            <div class="col-md-4">
                <label for="nama_kamp">NAMA KAMPUNG</label>
                <input type="hidden" name="id_kampung" id="xid_kampung" class="form-control">
                <input type="text" name="kampung" id="xkampung" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="distrik">DISTRIK</label>
                <select name="id_distrik" id="xid_distrik" class="form-control">
                    <option value="0">--- Pilih ---</option>
                    <?php
                    foreach($distrik as $p => $val)
                    {?>
                    <option value="<?php echo $val->id_distrik;?>"><?php echo $val->distrik; ?></option>
                    <?php
                    }?>
                </select>
            </div>
            <div class="col-md-4">
                <label for="kode_wilayah">KODE WILAYAH</label>
                <input type="text" name="kode_wilayah" id="xkode_wilayah" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="nama_koor">NAMA PIC</label>
                <input type="text" name="nama_koorkam" id="xnama_koorkam" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="no_kontak">NO KONTAK</label>
                <input type="text" name="kontak_koorkam" id="xkontak_koorkam" class="form-control">
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