<?= $this->extend('layout/MasterLayout') ?>
<?= $this->section('content') ?>

<script src="<?= base_url()?>\assets\js\jquery-1.11.3.min.js"></script>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">JUMLAH DPT</p>
                                <h5 class="font-weight-bolder mb-0">
                                <?= $hitung['jumlah_dpt_total'] ?>
                                <!-- <span class="text-success text-sm font-weight-bolder">+55%</span> -->
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa fa-users text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">JUMLAH PRIA</p>
                                <h5 class="font-weight-bolder mb-0">
                                <?= $hitung['total_pria'] ?>
                                <!-- <span class="text-success text-sm font-weight-bolder">+55%</span> -->
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa fa-male text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">JUMLAH WANITA</p>
                                <h5 class="font-weight-bolder mb-0">
                                <?= $hitung['total_wanita'] ?>
                                <!-- <span class="text-success text-sm font-weight-bolder">+55%</span> -->
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa fa-female text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-12">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h5 class="text-sm mb-0">
                            <i class="fas fa-users" aria-hidden="true"></i>
                            Daftar Pemilih Tetap Kampung/Keluarahan <?= $kampung['kampung'] ?>
                        </h5>
                    </div>
                    <div class="col-lg-6 col-5 my-auto text-end">
                        <a class="btn btn-sm bg-gradient-dark mb-0" data-bs-toggle="modal" href="#CreateDpt"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;Tambah DPT</a>
                        <a class="btn btn-sm bg-gradient-dark mb-0" data-bs-toggle="modal" href="#"><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;Export PDF</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">No</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Nama / NIK</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Tgl Lahir</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">JK</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Kampung</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($dppt as $item) { ?>
                                <tr>
                                    <td class="text-sm">
                                        <span class="badge badge-sm bg-gradient-secondary"><?php echo $no++ ?></span>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm text-uppercase"><?php echo $item->nama ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->nik ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><?php echo $item->ttl ?></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                            <?php 
                                            $laki = 'L';
                                            if($item->jk==$laki): ?>
                                                <img src="<?php echo base_url()?>/assets/frontend/img/track/man.png" class="avatar avatar-sm me-3" alt="user1">
                                            <?php else: ?>
                                                <img src="<?php echo base_url()?>/assets/frontend/img/track/woman.png" class="avatar avatar-sm me-3" alt="user1">
                                            <?php endif ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm text-uppercase"><?php echo $item->distrik ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->kampung ?></p>
                                            </div>
                                        </div>
                                    </td>     
                                    <td>
                                        <a class="btn btn-link text-dark px-3 mb-0" href="#UpdateDpt" title="edit" data-bs-toggle="modal" onclick="update_dpt(
                                            '<?= $item->id_dpt ?>',
                                            '<?= $item->nik ?>',
                                            '<?= $item->nama ?>',
                                            '<?= $item->id_distrik ?>',
                                            '<?= $item->id_kampung ?>',
                                            '<?= $item->jk ?>',
                                            '<?= $item->ttl ?>',
                                            '<?= $item->distrik ?>',
                                            '<?= $item->kampung ?>'
                                        )"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i></a>
                                        <a class="btn btn-link text-dark px-3 mb-0" href="#DeleteDpt" title="Hapus" data-bs-toggle="modal" onclick="delete_dpt(
                                            '<?= $item->id_dpt ?>',
                                            '<?= $item->id_kampung ?>'
                                        )"><i class="fas fa-trash-alt text-dark me-2" aria-hidden="true"></i></a>
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

<div class="modal fade" id="CreateDpt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel"><i class="far fa fa-plus-circle"></i> Tambah DPT </h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <?= $this->include('datamaster/c-dpt') ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="UpdateDpt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel"><i class="far fa fa-edit"></i> Edit DPT </h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <?= $this->include('datamaster/u-dpt') ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="DeleteDpt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel"><i class="far fa fa-trash"></i> Hapus DPT </h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <?= $this->include('datamaster/d-dpt') ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    function update_dpt(id_dpt,nik,nama,id_distrik,id_kampung,jk,ttl,distrik,kampung) {
        $('#xid_dpt').val(id_dpt);
        $('#xnik').val(nik);
        $('#xnama').val(nama);
        $('#xid_distrik').val(id_distrik);
        $('#xid_kampung').val(id_kampung);
        $('#xjekel').val(jk);
        $('#xtgllahir').val(ttl);
        $('#xnamadistrik').val(distrik);
        $('#xnamakampung').val(kampung);
    }

    function delete_dpt(id_dpt,id_kampung) {
        $('#did_dpt').val(id_dpt);
        $('#did_kampung').val(id_kampung);
    }

</script>

<?= $this->endSection() ?>