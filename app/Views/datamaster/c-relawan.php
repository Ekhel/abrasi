<form method="post" action="<?= base_url('datamaster/create_relawan_post') ?>">
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="nik_relawan">NIK</label>
                <input type="text" name="nik_relawan" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="nama_relawan">Nama</label>
                <input type="text" name="nama_relawan" class="form-control">
            </div>
            
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="nama_distrik">DISTRIK</label>
                <select name="id_distrik" class="form-control">
                    <option value="">-- Pilih --</option>
                    <?php
                    foreach($distrik as $p => $val)
                    {?>
                    <option value="<?php echo $val->id_distrik;?>"><?php echo $val->distrik; ?></option>
                    <?php
                    }?>
                </select>
            </div>
            
            <div class="col-md-6">
                <label for="kampung">KAMPUNG</label>
                <select class="form-control" name="id_kampung">

                </select>
            </div>
            
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="tgl_lahir">Tgl lahir</label>
                <input type="date" name="tgl_lahir" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="kontak">KONTAK</label>
                <input type="text" name="kontak_relawan" class="form-control">
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