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
                            <i class="fas fa-map-marker" aria-hidden="true"></i>
                            KAMPUNG
                        </h5>
                    </div>
                    
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">No</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Kampung</th>
                                    
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">PIC</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Kontak</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($kampung as $item){?>
                                <tr>
                                    <td class="text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary"><?php echo $no++ ?></span>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <!-- <div>
                                                <img src="<?php echo base_url()?>/assets/frontend/img/track/location.png" class="avatar avatar-sm me-3" alt="user1">
                                            </div> -->
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 title="Liat DPT" class="mb-0 text-sm text-uppercase"><a href="#"><?php echo $item->kampung ?></a></h6>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->kode_wilayah ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td class="align-middle text-sm">
                                        <span class="mb-0 text-sm"><?php echo $item->nama_koorkam ?></span>
                                    </td>
                                    <td class="align-middle text-sm">
                                        <span class="mb-0 text-sm"> - </span>
                                    </td>
                                    <td>
                                        <a class="btn btn-link text-dark px-3 mb-0" href="#UpdateKampung" title="Edit" data-bs-toggle="modal" onclick="update_kampung(
                                            '<?= $item->id_kampung ?>',
                                            '<?= $item->kampung ?>',
                                            '<?= $item->kode_wilayah ?>',
                                            '<?= $item->id_distrik ?>',
                                            '<?= $item->nama_koorkam ?>',
                                            '<?= $item->kontak_koorkam ?>',
                                        )"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>EDIT</a>
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

<div class="modal fade" id="UpdateKampung" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel"><i class="far fa fa-edit"></i> Edit Kampung </h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <?= $this->include('datamaster/u-kampung') ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    function update_kampung(id_kampung,kampung,kode_wilayah,id_distrik,nama_koorkam,kontak_koorkam) {
        $('#xid_kampung').val(id_kampung);
        $('#xkampung').val(kampung);
        $('#xkode_wilayah').val(kode_wilayah);
        $('#xid_distrik').val(id_distrik);
        $('#xnama_koorkam').val(nama_koorkam);
        $('#xkontak_koorkam').val(kontak_koorkam);
    }

</script>

<?= $this->endSection() ?>