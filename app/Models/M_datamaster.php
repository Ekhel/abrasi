<?php

namespace App\Models;

use CodeIgniter\Model;

class M_datamaster extends Model {
    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    function GetAllDistrik() {
        $db = $this->db;
        $query = $db->table('tb_distrik');

        return $query->get()->getResult();
    }

    function GetAllKampung() {
        $query = $this->db->table('tb_kampung');
        return $query->get()->getResult();
    }

    function GetKampungById($id) {
        $builder = $this->db->table('tb_kampung');
        $query = $builder->where('id_kampung', $id)->get();

        return $query->getRowArray();
    }

    function GetAllDpt() {
        $builder = $this->db->table('v_dpt');
        return $query = $builder->get()->getResult();
    }

    function GetAllDptByIdKampung($id) {
        $builder = $this->db->table('v_dpt');
        $query = $builder->where('id_kampung', $id)->get();

        return $query->getResult();
    }

    function CountDptByIdKampung($id) {
        $query = $this->db->query("SELECT
        id_kampung,
        COUNT(DISTINCT id_dpt) AS jumlah_dpt_total,
        COUNT(
            DISTINCT CASE WHEN jk = 'L' THEN id_dpt
            END
        ) AS total_pria,
        COUNT(
            DISTINCT CASE WHEN jk = 'P' THEN id_dpt
        END
        ) AS total_wanita
        FROM
            v_dpt2
        WHERE
            id_kampung = '$id' ");
        
        return $query->getRowArray();
    }

    function GetAllRelawan() {
        $builder = $this->db->table('v_relawan');
        $query = $builder->get();

        return $query->getResult();
    }

    function CountRelawan() {
        $builder = $this->db->table('v_count_tim');
        $query = $builder->get();

        return $query->getRowArray();
    }

    function InsertOne($data,$table) {
        $query = $this->db->table($table)->insert($data);
        return $query;
    }

    function InsertMany($data,$table) {
        $query = $this->db->table($table)->insert($data);
        return $query;
    }

    function UpdateOne($data,$where,$table) {
        $query = $this->db->table($table)
                          ->where($where)
                          ->set($data)
                          ->update();
        return $query;
    }

    function DeleteOne($where,$table) {
        $builder = $this->db->table($table);
        $query = $builder->where($where)->delete();
        return $query;
    }
    
}