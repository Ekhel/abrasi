<?= $this->extend('layout/MasterLayout') ?>
<?= $this->section('content') ?>

<script src="<?= base_url()?>\assets\js\jquery-1.11.3.min.js"></script>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h5 class="text-sm mb-0">
                            <i class="fas fa-users" aria-hidden="true"></i>
                            RELAWAN <strong>J O A N</strong>
                        </h5>
                    </div>
                    <div class="col-lg-6 col-5 my-auto text-end">
                        <a class="btn btn-sm bg-gradient-dark mb-0" href="<?= base_url('datamaster/print_relawan') ?>" target="blank"><i class="fas fa-print"></i>&nbsp;&nbsp;Print</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table id="Data">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>USIA</th>
                                    <th>KAMPUNG</th>
                                    <th>RT / RW</th>
                                    <th>Kontak</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($relawan as $item) { ?>
                                <tr>
                                    <td><?= $item->nama ?></td>
                                    <td><?= $item->usia ?></td>
                                    <td><?= $item->kampung ?></td>
                                    <td><?= $item->rt ?> / <?= $item->rw ?></td>
                                    <td><?= $item->kontak ?></td>                                    
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
    
    $(document).ready(function() {
        $('#Data').DataTable({
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    });


    $('select[name="id_distrik"]').on('change', function() {
        var id_distrik = $(this).val();
        if(id_distrik) {
            $.ajax({
                url: '<?= ('/Tps/GetKampungDropDown') ?>/'+id_distrik,
                type: "GET",
                dataType: "json",
                secure: true,
                headers: {
                    'Access-Control-Allow-Origin': '*',
                },
                success:function(data) {
                    $('select[name="id_kampung"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="id_kampung"]').append('<option value="'+ value.id_kampung +'">'+ value.kampung+'</option>');
                    });
                }
            });
        }else{
            $('select[name="id_kampung"]').empty();
        }
    });
</script>

<?= $this->endSection() ?>