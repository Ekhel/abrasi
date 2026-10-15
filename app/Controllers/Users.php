<?php

namespace App\Controllers;

use App\Models\M_user;

class Users extends BaseController {

    function __construct() {
        $this->M_user = new M_user();
    }

    public function index(){
        $data['title']= 'Akun';
        $data['current_uri'] = $this->request->uri->getSegment(1); 
        $data['akun']= $this->M_user->GetAllUsers();
        return view('users/r-users',$data);
    }

    public function create() {
        return view('auth/register');
    }
}