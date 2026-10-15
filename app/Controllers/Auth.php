<?php

namespace App\Controllers;

// use App\Models\M_user;
use \App\Models\UserModel;

class Auth extends BaseController {

    // function __construct() {
    //     $this->M_user = new M_user();
    // }

    public function index() {
        return view('auth/login');
    }

    public function login() {
		$session = session();

		$nik = $this->request->getPost('nik');
		$sandi = $this->request->getPost('sandi');

		$model = new UserModel;
        $user = $model->where('nik', $nik)
					  ->first();

        //$username = isset($user['nama']);
        if ($user === null) {

			return redirect()->to('/login');
			$session->setFlashdata('fail','Akun tidak ditemukan');

		} else {

			$curentPass = $user['password_hash'];
			
			if (password_verify($sandi, $curentPass)) {

				$userdata = [
					'id_user'   => $user['id_user'],
					'nik'  		=> $user['nik'],
					'id_distrik'=> $user['id_distrik'],
					'id_kampung'=> $user['id_kampung'],
					'level'     => $user['level'],
					'logged_in' => TRUE
				];

				$session->regenerate();
				$session->set($userdata);
				$level = $session->get('level');

				if ($level === '1' OR $level === '3') {
					
					return redirect()->to('/dashboard/index1');
					$session->setFlashdata('success',
						'<div class="alert alert-success background-success">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<i class="icofont icofont-close-line-circled text-white"></i>
							</button>
							<strong>Success!</strong> Add Class <code> Selamat Datang Kembali !!</code>
						</div>');

				} else {

					return redirect()->to('/pd');
					$session->setFlashdata('success',
						'<div class="alert alert-success background-success">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<i class="icofont icofont-close-line-circled text-white"></i>
							</button>
							<strong>Success!</strong> Add Class <code> Selamat Datang Kembali !!</code>
						</div>');
						
				}

			} else {

				return redirect()->to('/login');

			}
		}
    }
    
    public function logout() {

        session()->destroy();

        return redirect()->to('/login');
    }
}