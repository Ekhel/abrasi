<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model {
    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    function GetAllUsers() {
        $query = $this->db->query('SELECT * FROM tb_user
        LEFT JOIN tb_user_level ON tb_user.level = tb_user_level.id_level');

        return $query->getResult();
    }

    // function cek_user($nama) {
    //     $builder = $this->db->table('tb_user');
    //     $query = $builder->getWhere(['nama' => $nama]);

    //     return $query->getRowArray();
    // }
}