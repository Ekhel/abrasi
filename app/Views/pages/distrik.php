<div class="row">
    <div class="col-12">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <!-- <h6>Detail</h6> -->
                    <h5 class="text-sm mb-0">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        TARGET SUARA DI DISTRIK
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
                            <tr>
                                <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Distrik</th>
                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">DPT</th>
                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Base JOAN</th>
                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">R JOAN</th>
                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Target UP</th>
                                <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">RoE</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($distrik as $item){?>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm"><?php echo $item->distrik ?></h6>
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
                                
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>