<?php 
    $session = session();
    $level = $session->get('level');
?>

<?php if ($level != 2) {?>
<div class="pcoded-inner-navbar main-menu">
    <div class="pcoded-navigatio-lavel">DATA</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="<?= base_url('dashboard')?>">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">DASHBOARD</span>
                </a>
            </li>
            
            <!-- <li class="">
                <a href="navbar-light.htm">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Navigation</span>
                </a>
            </li> -->
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                    <span class="pcoded-mtext">MASTER DATA</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="<?= base_url('datamaster/pd')?>">
                            <span class="pcoded-mtext">Perangkat Daerah</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="<?= base_url('datamaster/pegawai')?>">
                            <span class="pcoded-mtext">Pegawai</span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
    <div class="pcoded-navigatio-lavel">CONTROLLING</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-check-circle"></i></span>
                <span class="pcoded-mtext">RKPD</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="<?= base_url('controlling/renja') ?>">
                        <span class="pcoded-mtext">Renja</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="<?= base_url('controlling/renja_fisik') ?>">
                        <span class="pcoded-mtext">Renja Fisik</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="widget-data.htm">
                        <span class="pcoded-mtext">Rekap Bulanan</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="widget-data.htm">
                        <span class="pcoded-mtext">Laporan Bulanan</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                <span class="pcoded-mtext">IKU</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="widget-statistic.htm">
                        <span class="pcoded-mtext">Program Prioritas</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="widget-data.htm">
                        <span class="pcoded-mtext">Indikator</span>
                    </a>
                </li>

            </ul>
        </li>
    </ul>
    <div class="pcoded-navigatio-lavel">MONITORING</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                <span class="pcoded-mtext">MEJA</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="<?= base_url('meja/jadwal') ?>">
                        <span class="pcoded-mtext">Jadwal</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="form-elements-add-on.htm">
                        <span class="pcoded-mtext">Catatan</span>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-briefcase"></i></span>
                <span class="pcoded-mtext">LAPANGAN</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="form-elements-component.htm">
                        <span class="pcoded-mtext">Jadwal</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="form-elements-add-on.htm">
                        <span class="pcoded-mtext">Renja Fisik</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="form-elements-add-on.htm">
                        <span class="pcoded-mtext">Bahan</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="pcoded-navigatio-lavel">SETTINGAN</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                <span class="pcoded-mtext">PENGGUNA</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="<?= base_url('user')?>">
                        <span class="pcoded-mtext">Akun</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="bs-table-sizing.htm">
                        <span class="pcoded-mtext">Level Akses</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-cogs"></i></span>
                <span class="pcoded-mtext">FILE UPLOAD</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="<?= base_url('controlling/import_subkeg') ?>">
                        <span class="pcoded-mtext">Sub.Keg</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                <span class="pcoded-mtext">JADWAL</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="bs-basic-table.htm">
                        <span class="pcoded-mtext">Pengiputan</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="bs-table-sizing.htm">
                        <span class="pcoded-mtext">Kunci</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-server"></i></span>
                <span class="pcoded-mtext">BACKUP</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="bs-basic-table.htm">
                        <span class="pcoded-mtext">Database</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="bs-table-sizing.htm">
                        <span class="pcoded-mtext">File Sistem</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<?php } else {?>
    <div class="pcoded-inner-navbar main-menu">
    <div class="pcoded-navigatio-lavel">DATA</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="<?= base_url('pd')?>">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">DASHBOARD</span>
                </a>
            </li>
            
        </ul>
    <div class="pcoded-navigatio-lavel">CONTROLLING</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-check-circle"></i></span>
                <span class="pcoded-mtext">RKPD</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="widget-statistic.htm">
                        <span class="pcoded-mtext">Pra Renja</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="<?= base_url('controlling/renja') ?>">
                        <span class="pcoded-mtext">Renja</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="<?= base_url('controlling/renja_fisik') ?>">
                        <span class="pcoded-mtext">Renja Fisik</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="pcoded-navigatio-lavel">MONITORING</div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                <span class="pcoded-mtext">MEJA</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="<?= base_url('meja/jadwal') ?>">
                        <span class="pcoded-mtext">Jadwal</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="form-elements-add-on.htm">
                        <span class="pcoded-mtext">Catatan</span>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-briefcase"></i></span>
                <span class="pcoded-mtext">LAPANGAN</span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="form-elements-component.htm">
                        <span class="pcoded-mtext">Jadwal</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="form-elements-add-on.htm">
                        <span class="pcoded-mtext">Laporan</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<?php } ?>