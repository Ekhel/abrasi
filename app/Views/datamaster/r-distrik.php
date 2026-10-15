<?= $this->extend('layout/MasterLayout') ?>
<?= $this->section('content') ?>

<script src="<?= base_url()?>\assets\js\jquery-1.11.3.min.js"></script>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <!-- <h6>Detail</h6> -->
                        <h5 class="text-sm mb-0">
                            <i class="fas fa-users" aria-hidden="true"></i>
                            DISTRIK
                        </h5>
                    </div>
                    <div class="col-lg-6 col-5 my-auto text-end">
                        <a class="btn btn-sm bg-gradient-dark mb-0" target="blank" href="#"><i class="fas fa-print"></i>&nbsp;&nbsp;Print</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Distrik</th>
                                    
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Nama PIC</th>
                                    
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($distrik as $item){?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo $item->distrik ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->kode_wil ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td class="align-middle text-center text-sm">
                                        <span class="mb-0 text-sm"><?= $item->nama_koordis ?></span>
                                    </td>
                                    
                                    <td>
                                        <a class="btn btn-link text-dark px-3 mb-0" href="#UpdateDistrik" title="edit" data-bs-toggle="modal" onclick="update_distrik(
                                            '<?= $item->id_distrik ?>',
                                            '<?= $item->distrik ?>',
                                            '<?= $item->kode_wil ?>',
                                            '<?= $item->nama_koordis ?>',
                                            '<?= $item->kontak_koordis ?>',
                                            '<?= $item->wp ?>'
                                        )"><i class="fas fa-edit" aria-hidden="true"></i>EDIT</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="UpdateDistrik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel"><i class="far fa fa-edit"></i> Edit Distrik </h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <?= $this->include('datamaster/u-distrik') ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    function update_distrik(id_distrik,distrik,kode_wil,nama_koordis,kontak_koordis, wp) {
        $('#xid_distrik').val(id_distrik);
        $('#xdistrik').val(distrik);
        $('#xkode_wil').val(kode_wil);
        $('#xnama_koordis').val(nama_koordis);
        $('#xkontak_koordis').val(kontak_koordis);
        $('#xwp').val(wp);
    }

</script>

<?= $this->endSection() ?>