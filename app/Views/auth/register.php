<?= $this->extend('layout/MasterLayout') ?>
<?= $this->section('content') ?>

<div class="page-wrapper">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4> Daftar Pengguna</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Pengguna</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Tambah</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="row">
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fa fa-user"></i> Daftar Pengguna Baru</h5>
                        <div class="card-header-right">
                            <i class="icofont icofont-spinner-alt-5"></i>
                        </div>
                    </div>
                    <div class="card-block">
                        <h4 class="sub-title"></h4>
                        <form action="">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Level</label>
                                <div class="col-sm-8">
                                    <select class="js-example-basic-single col-sm-12" id="xlevel">
                                        <option value="1">administrator</option>
                                        <option value="2">Perangkat Daerah</option>
                                        <option value="3">Bidang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" hidden="true" id="xpd">
                                <label class="col-sm-2 col-form-label">PD</label>
                                <div class="col-sm-8">
                                    <select class="js-example-basic-single col-sm-12">
                                        <option value="1">administrator</option>
                                        <option value="2">Perangkat Daerah</option>
                                        <option value="3">Bidang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-6">
                                    <input type="checkbox" class="js-small" checked="">
                                    <label for="">Aktif</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script type="text/javascript">
    $(document).ready(function() {
        $('#xlevel').change(function() {
            var level = $(this).val();
            $('#xpd').prop('hidden', level != 1);
        });
    });
    
</script> -->

<?= $this->endSection() ?>

