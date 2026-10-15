<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'tb_user';
    protected $allowedFields = ['id_user','nik','sandi','sandi_deskripsi','id_distrik','id_kampung','level'];
}