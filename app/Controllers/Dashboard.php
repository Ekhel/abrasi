<?php

namespace App\Controllers;

use App\Models\M_dashboard;
use App\Models\M_controlling;

class Dashboard extends BaseController {

    function __construct() {
        $this->M_dashboard = new M_dashboard();
    }

    public function index1() {
        $data['title'] = 'DASHBOARD';
        $data['halaman'] = 'D A S H B O A R D';
        $data['current_uri'] = $this->request->uri->getSegment(2); 
        // $data['paslon'] = $this->M_dashboard->CountPaslon();
        // $data['distrik'] = $this->M_dashboard->GetDistrik();
        // $data['usiagender'] = $this->M_dashboard->GetGenderUsia();
        // $data['relawan'] = $this->M_dashboard->CountRelawan();
        
        return view('pages/dashboard',$data);
    }

}