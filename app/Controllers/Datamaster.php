<?php

namespace App\Controllers;

use App\Models\M_datamaster;

class Datamaster extends BaseController {

    function __construct() {
        $this->M_datamaster = new M_datamaster();
    }

    public function index() {
        return view('pages/dashboard');
    }

    public function distrik() {
        $data['title'] = 'Distrik';
        $data['halaman'] = 'Data Master / Distrik';
        $data['current_uri'] = $this->request->uri->getSegment(2);
        // $data['wp'] = $this->M_datamaster->GetALlWp();
        $data['distrik'] = $this->M_datamaster->GetAllDistrik();
        return view('datamaster/r-distrik', $data);
    }

    public function p_distrik() {
        $data['title'] = 'Print Distrik';
        $data['halaman'] = 'Print Distrik';
        $data['current_uri'] = $this->request->uri->getSegment(2); 
        $data['wp'] = $this->M_datamaster->GetALlWp();
        $data['distrik'] = $this->M_datamaster->GetAllDistrik();
        return view('datamaster/p-distrik', $data);
    }

    public function kampung() {
        $data['title'] = 'Kampung';
        $data['halaman'] = 'Data Master / Kampung';
        $data['current_uri'] = $this->request->uri->getSegment(2); 
        $data['kampung'] = $this->M_datamaster->GetAllKampung();
        $data['distrik'] = $this->M_datamaster->GetAllDistrik();
        return view('datamaster/r-kampung', $data);
    }

    public function p_kampung() {
        $data['title'] = 'Print Kampung';
        $data['halaman'] = 'Kampung';
        $data['current_uri'] = $this->request->uri->getSegment(2); 
        $data['kampung'] = $this->M_datamaster->GetAllKampung();
        $data['distrik'] = $this->M_datamaster->GetAllDistrik();
        return view('datamaster/p-kampung', $data);
    }

    function update_kampung_post() {
        $id = $this->request->getVar('id_kampung');
        $kampung = $this->request->getVar('kampung');
        $kode_wilayah = $this->request->getVar('kode_wilayah');
        $nama_koorkam = $this->request->getVar('nama_koorkam');
        $kontak_koorkam = $this->request->getVar('kontak_koorkam');
        $jumlah_dpt = $this->request->getVar('jumlah_dpt');

        $data = [
            'kampung'        => $kampung,
            'kode_wilayah'   => $kode_wilayah,
            'nama_koorkam'   => $nama_koorkam,
            'kontak_koorkam' => $kontak_koorkam,
            'jumlah_dpt'     => $jumlah_dpt
        ];

        $where = ['id_kampung' => $id];
        $table = 'tb_kampung';

        if ($data) {

            $this->M_datamaster->UpdateOne($data,$where,$table);

        }

        return redirect()->to('/datamaster/kampung');
    }

    function update_distrik_post() {
        $id = $this->request->getVar('id_distrik');
        $distrik = $this->request->getVar('distrik');
        $kode_wil = $this->request->getVar('kode_wil');
        $nama_koordis = $this->request->getVar('nama_koordis');
        $kontak_koordis = $this->request->getVar('kontak_koordis');
        $wp = $this->request->getVar('wp');

        $data = [
            'distrik'        => $distrik,
            'kode_wil'       => $kode_wil,
            'nama_koordis'   => $nama_koordis,
            'kontak_koordis' => $kontak_koordis,
            'wp'             => $wp
        ];

        $where = ['id_distrik' => $id];
        $table = 'tb_distrik';

        if ($data) {

            $this->M_datamaster->UpdateOne($data,$where,$table);

        }

        return redirect()->to('/datamaster/distrik');
    }

}