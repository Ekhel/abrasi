<?= $this->extend('layout/MasterLayout') ?>
<?= $this->section('content') ?>

<script src="<?= base_url()?>\assets\js\jquery-1.11.3.min.js"></script>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card-body px-0 pt-0 pb-2">
                <form method="post" action="<?= base_url('datamaster/import_dpt_post') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <h6>Import Excel File DPT</h5>
                            <div class="col-md-5">
                                <input type="file" name="fileexcel" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <!-- <input type="date" name="ttl" class="form-control"> -->
                                <button type="submit" class="btn bg-success">Import</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h5 class="text-sm mb-0">
                            <i class="fas fa-users" aria-hidden="true"></i>
                            DAFTAR PEMILIH TETAP
                        </h5>
                    </div>
                    <!-- <div class="col-lg-6 col-5 my-auto text-end">
                        <a class="btn btn-sm bg-gradient-dark mb-0" data-bs-toggle="modal" href="#CreateDpt"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;Tambah DPT</a>
                    </div> -->
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table id="Data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>TL</th>
                                    <th>Kampung</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($dppt as $item){?>
                                <tr class="small">
                                    <td><?php echo $no++ ?></td>
                                    <td><?= $item->nama ?></td>
                                    <td><?= $item->nik ?></td>
                                    <td><?php echo $item->ttl ?></td>
                                    <td><?= $item->kampung ?></td>
                                    <td></td>                          
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

<script>

    //$('#TableData').DataTable();
    
    $(document).ready(function() {
        $('#Data').DataTable({
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    });
</script>

<?= $this->endSection() ?>