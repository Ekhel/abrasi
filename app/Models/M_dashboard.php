<?php

namespace App\Models;

use CodeIgniter\Model;

class M_dashboard extends Model {

    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    function CountPaslon() {
        $query = $this->db->query("SELECT
        COUNT(DISTINCT tb_paslon.id_paslon) as total_paslon
        FROM 
            tb_paslon");
        
        return $query->getRowArray();
    }

    function CountRelawan() {
        $query = $this->db->query("SELECT
        COUNT(Case When relawan = 1 Then id_dpt End) as total_relawan
        FROM 
            tb_dpt2");
        
        return $query->getRowArray();
    }

    function GetDistrik() {
        $builder = $this->db->table('tb_distrik');
        $query = $builder->get()->getResult();

        return $query->getResult();
    }

    function GetDistrikById($id) {
        $builder = $this->db->table('v_dis_any');
        $query = $builder->where('id_distrik', $id)->get();

        return $query->getRowArray();
    }

    function GetKampung($id) {
        $builder = $this->db->table('v_kamp_any');
        $query = $builder->where('id_distrik', $id)->get();

        return $query->getResult();
    }

    function GetGenderDis($id) {
        $builder = $this->db->table('v_gender_dis');
        $query = $builder->where('id_distrik', $id)->get();

        return $query->getRowArray();
    }

    function GetGenderUsia() {
        $builder = $this->db->table('v_analistik');
        return $query = $builder->get()->getRowArray();
    }
}