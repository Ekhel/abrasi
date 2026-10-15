<?= $this->extend('layout/MasterLayout') ?>
<?= $this->section('content') ?>

<script src="<?= base_url()?>\assets\js\jquery-1.11.3.min.js"></script>

<?php
    $dpt = '131936';
?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">GEN - Z</p>
                                <h5 class="font-weight-bolder mb-0">
                                <?= number_format($usiagender['gen_z']) ?>
                                <span class="text-success text-sm font-weight-bolder"><?= number_format($usiagender['gen_z'] / $dpt * 100,1) ?> </span>
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
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">MILENIAL</p>
                                <h5 class="font-weight-bolder mb-0">
                                <?= number_format($usiagender['milenial']) ?>
                                <span class="text-success text-sm font-weight-bolder"><?= number_format($usiagender['milenial'] / $dpt * 100,1) ?> </span>
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
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">GEN - X</p>
                                <h5 class="font-weight-bolder mb-0">
                                <?= number_format($usiagender['gen_x']) ?>
                                <span class="text-success text-sm font-weight-bolder"><?= number_format($usiagender['gen_x'] / $dpt * 100,1) ?></span>
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
    </div>
    <br />
    <div class="row">
        <div class="col-12">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <!-- <h6>Detail</h6> -->
                        <h5 class="text-sm mb-0">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            Analistik Distrik (DPT)
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
                                <tr style="background-color:#91eaa3;">
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Distrik</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">DPT</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Base JOAN</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">R JOAN</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Target UP</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">RoE</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total_dpt = 0;
                                $total_joan = 0;
                                $total_roe = 0; 
                                foreach($distrik as $item){?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><a href="<?= base_url('dpt/kampungany/'.$item->id_distrik.'') ?>"><?php echo $item->distrik ?></a></h6>
                                                <p class="text-xs text-secondary mb-0"><?= $item->baseline ?> %</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><?= number_format($item->dpt) ?></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><?= $item->baseline_joan ?> %</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="mb-0 text-sm"><?= number_format($item->result_joan) ?></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="mb-0 text-sm"> <?= $item->target_up ?> %</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="mb-0 text-sm"> <?= number_format($item->target_blt) ?> </span>
                                    </td>
                                    <td>
                                        <a class="btn btn-link text-dark px-3 mb-0" href="#UpdateDistrik" title="edit" data-bs-toggle="modal" onclick="update_distrik(
                                            '<?= $item->id_distrik ?>',
                                            '<?= $item->baseline_joan ?>',
                                            '<?= $item->target_up ?>',
                                            '<?= $item->level_blt ?>'
                                        )"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php
                                $total_joan = $total_joan+$item->result_joan;
                                $total_dpt = $total_dpt+$item->dpt;
                                $total_roe = $total_roe+$item->target_blt;
                            } ?>
                            </tbody>
                            <tfoot>
                                <tr class="bg-success">
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong>JUMLAH</strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong><?= number_format($total_dpt) ?></strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong></strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong><?= number_format($total_joan) ?></strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong></strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong><?= number_format($total_roe) ?></strong></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><strong><?= number_format($total_roe+$total_joan) ?></strong></span>
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
                    <?= $this->include('analistik/u-distrik') ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    function update_distrik(id_distrik,baseline_joan,target_up,level_blt) {
        $('#xid_distrik').val(id_distrik);
        $('#xbaseline_joan').val(baseline_joan);
        $('#xtarget_up').val(target_up);
        $('#xlevel').val(level_blt);
    }

</script>

<?= $this->endSection() ?>