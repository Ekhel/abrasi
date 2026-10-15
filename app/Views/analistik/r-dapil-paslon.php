<?= $this->extend('layout/MasterLayout') ?>
<?= $this->section('content') ?>

<script src="<?= base_url()?>\assets\js\jquery-1.11.3.min.js"></script>

<?php
    $dpt = '131936';
?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <!-- <h6>Detail</h6> -->
                        <h5 class="text-sm mb-0">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            HASIL SURVEI ELEKTABILITAS (LSI Juni 2024)
                        </h5>
                    </div>
                    <!-- <div class="col-lg-6 col-5 my-auto text-end">
                        <a class="btn btn-sm bg-gradient-dark mb-0" target="blank" href="<?= base_url('datamaster/p_distrik')?>"><i class="fas fa-print"></i>&nbsp;&nbsp;Print</a>
                    </div> -->
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr style="background-color:#00eec2;">
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">DAPIL</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">DPT</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">JOAN</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">HANA</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">TOAM</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">GIRI</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">J+H</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">T+G</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">LAIN</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">BM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total_joan = 0;
                                $total_hana = 0;
                                $total_toam = 0;
                                $total_giri = 0;
                                $total_lain = 0;
                                $total_bm = 0;
                                $total_joanandhana = 0;
                                $total_toamandgiri = 0; 
                                foreach($dapil as $item){?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 title="<?= $item->keterangan ?>" class="mb-0 text-sm"><?php echo $item->dapil ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?= number_format($item->baseline,1) ?> %</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><?= number_format($item->jumlah_dpt) ?></span>
                                    </td>
                                    <td>
                                        <div class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= number_format($item->dpt_joan) ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?= $item->base_joan ?> %</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= number_format($item->dpt_hana) ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?= $item->base_hana ?> %</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= number_format($item->dpt_toam) ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?= $item->base_toam ?> %</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= number_format($item->dpt_giri) ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?= $item->base_giri ?> %</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= number_format($item->dpt_joan+$item->dpt_hana) ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?= $item->base_joan+$item->base_hana ?> %</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= number_format($item->dpt_toam+$item->dpt_giri) ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?= $item->base_toam+$item->base_giri ?> %</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= number_format($item->dpt_lainnya) ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?= $item->lainnya ?> %</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= number_format($item->dpt_bmtttj) ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?= $item->bm_tt_tj ?> %</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                    $total_joan = $total_joan+$item->dpt_joan;
                                    $total_hana = $total_hana+$item->dpt_hana;
                                    $total_toam = $total_toam+$item->dpt_toam;
                                    $total_giri = $total_giri+$item->dpt_giri;
                                    $total_lain = $total_lain+$item->dpt_lainnya;
                                    $total_bm = $total_bm+$item->dpt_bmtttj;
                                    $total_dpt_kab = '131936';
                                } ?>
                            </tbody>
                            <br />
                            <br />
                            <tfoot>
                                <tr class="bg-success">
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong>JUMLAH</strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong>131.936</strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong><?= number_format($total_joan) ?></strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong><?= number_format($total_hana) ?></strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong><?= number_format($total_toam) ?></strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong><?= number_format($total_giri) ?></strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong><?= number_format($total_joan+$total_hana) ?></strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong><?= number_format($total_toam+$total_giri) ?></strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong><?= number_format($total_lain) ?></strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong><?= number_format($total_bm) ?></strong></span>
                                    </td>
                                </tr>
                            </tfoot>
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
    function update_distrik(id_distrik,distrik,target_up,dpt,baseline) {
        $('#xid_distrik').val(id_distrik);
        $('#xdistrik').val(distrik);
        $('#xtarget_up').val(target_up);
        $('#xdpt').val(dpt);
        $('#xbaseline').val(baseline);
    }

</script>

<?= $this->endSection() ?>