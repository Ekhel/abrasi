<?php

namespace App\Controllers;

use App\Models\M_monitoring;

class Monitoring extends BaseController {

    function __construct() {
        $this->M_monitoring = new M_monitoring();
    }
    
    public function index() {
        $data['title'] = 'Jadwal Monev Meja';
        $data['jadwal'] = $this->M_monitoring->GetAllJadwalMonevMeja();
        return view('monitoring/r-jadwal-meja',$data);
    }
}