<?= $this->extend('layout/MasterLayout') ?>
<?= $this->section('content') ?>

<script src="<?= base_url()?>\assets\js\jquery-1.11.3.min.js"></script>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="small table align-items-center mb-0">
                            <tr>
                                <td>DISTRIK</td>
                                <td>:</td>
                                <td><?= $distrik['distrik'] ?></td>
                            </tr>
                            <tr>
                                <td>BASELINE</td>
                                <td>:</td>
                                <td><?= $distrik['baseline'] ?> %</td>
                            </tr>
                            <tr>
                                <td>DPT</td>
                                <td>:</td>
                                <td><?= number_format($distrik['dpt']) ?></td>
                            </tr>
                            <tr>
                                <td>BASELINE JOAN</td>
                                <td>:</td>
                                <td><?= $distrik['baseline_joan'] ?> %</td>
                            </tr>
                            <tr>
                                <td>DPT JOAN</td>
                                <td>:</td>
                                <td><?= number_format($distrik['result_joan']) ?> </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="small table align-items-center mb-0">
                            <tr>
                                <td>TARGET UP</td>
                                <td>:</td>
                                <td><?= $distrik['target_up'] ?> %</td>
                            </tr>
                            <tr>
                                <td>RoE</td>
                                <td>:</td>
                                <td><?= number_format($distrik['target_blt']) ?> </td>
                            </tr>
                            <tr>
                                <td>BASELINE JOAN + RoE</td>
                                <td>:</td>
                                <td><?= number_format($distrik['result_joan'] + $distrik['target_blt']) ?></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">GEN - Z</p>
                                <h5 class="font-weight-bolder mb-0">
                                <?= number_format($genderdis['gen_z']) ?>
                                <span class="text-success text-sm font-weight-bolder"><?= number_format($genderdis['gen_z'] / $genderdis['dpt_distrik'] * 100,1) ?> </span>
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
                                <?= number_format($genderdis['milenial']) ?>
                                <span class="text-success text-sm font-weight-bolder"><?= number_format($genderdis['milenial'] / $genderdis['dpt_distrik'] * 100,1) ?> </span>
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
                                <?= number_format($genderdis['gen_x']) ?>
                                <span class="text-success text-sm font-weight-bolder"><?= number_format($genderdis['gen_x'] / $genderdis['dpt_distrik'] * 100,1) ?> </span>
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
                            <i class="fas fa-map-marker" aria-hidden="true"></i>
                            ANALISTIK KAMPUNG DI DISTRIK <?= $distrik['distrik'] ?>
                        </h5>
                    </div>
                    <!-- <div class="col-lg-6 col-5 my-auto text-end">
                        <a class="btn btn-sm bg-gradient-dark mb-0" target="blank" href="<?= base_url('datamaster/p_kampung') ?>"><i class="fas fa-print"></i>&nbsp;&nbsp;Print</a>
                    </div> -->
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Kampung</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Jumlah DPT</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">TPS / Tim 8</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Target UP</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">M+</th>
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">M-</th>
                                    
                                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">RoE</th>
                                    
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($kampung as $item){?>
                                <tr class="bg-info">
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <!-- <div>
                                                <img src="<?php echo base_url()?>/assets/frontend/img/track/location.png" class="avatar avatar-sm me-3" alt="user1">
                                            </div> -->
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm text-uppercase"><?= $item->kampung ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?= number_format($item->base_kampung,1) ?> %</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><?= number_format($item->jumlah_dpt_total) ?></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><?php echo $item->jumlah_tps_total ?></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="mb-0 text-sm"><?= $item->target_up ?></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="mb-0 text-sm"></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="mb-0 text-sm"></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="mb-0 text-sm"> <?= number_format($item->target_blt_kamp) ?> </span>
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <?php
                                $idkampung = $item->id_kampung;
                                foreach($tps as $tp) {
                                if($idkampung==$tp->id_kampung) {?>
                                <tr class="xs">
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            
                                            <div class="d-flex flex-column justify-content-center">
                                                <h7 class="mb-0 text-sm text-uppercase"><?= $tp->tps ?></h6>
                                                <p class="text-xs text-secondary mb-0"></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=""><?= number_format($tp->jumlah_dpt) ?></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <h6 class="mb-0 text-sm"><a class="badge badge-sm bg-gradient-secondary" href="#relawan" data-bs-toggle="modal" href="#"><?= $tp->jumlah_relawan ?> Orang</a></h6>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="mb-0 text-sm"><?= $tp->target_up ?> % </span>
                                    </td>
                                    <?php
                                        $max = "16";
                                        $min = "8";
                                        $jumlah_max = $max*$tp->jumlah_relawan;
                                        $jumlah_min = $min*$tp->jumlah_relawan;
                                    ?> 
                                    <td class="align-middle text-center text-sm">
                                        <span class="mb-0 text-sm"><?= $max ?> / <?= $jumlah_max+$tp->jumlah_relawan ?></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="mb-0 text-sm"><?= $min ?> / <?= $jumlah_min+$tp->jumlah_relawan ?></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="mb-0 text-sm"><?= number_format($tp->jumlah_dpt * $tp->target_up / 100) ?></span>
                                    </td>
                                </tr>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="relawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <div class="relawanview">
                    
                    </div>
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

    function relawan(distrik,kampung,tps) {
        var distrik = distrik;
        var kampung = kampung;
        var tps = tps;

        $('#tim8view').on('show.bs.modal', function () {
                $.ajax({
                type : 'POST',
                url : '<?= base_url();?>dpt/Tim8View/'+distrik+'/'+kampung+'/'+tps,
                data :  {distrik,kampung,tps},
                success : function(data){
                    $('.relawanview').html(data);
                }
            });
        })
    }

</script>

<?= $this->endSection() ?>