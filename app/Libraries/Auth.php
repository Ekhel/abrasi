<?php

namespace App\Libraries;

use App\Models\M_user;

class Authentication {

    function __construct() {
        $this->M_user = new M_user();
    }

    public function login2($nama, $sandi)
    {

        $user = $this->M_user->cek_user($nama);

        $username = $user['nama'];
        $password = $user['sandi'];
                      
        if ($username === null) {
            return false;
        }
        
        if (password_verify($sandi, $password)) {
            
            return false;
        
        }
        
        $session = session();
        $userdata = [
            'id_user'   => $user['id_user'],
            'username'  => $user['nama'],
            'id_pd'     => $user['id_skpd'],
            'level'     => $user['level'],
            'logged_in' => TRUE
        ];

        $session->regenerate();
        $session->set($userdata);

        return true;
    }
    
    public function logout()
    {
        session()->destroy();
    }
    
}