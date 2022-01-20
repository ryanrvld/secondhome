<?php

class Model_tipe extends CI_Model{
    
    public function tipe_a(){
    return $this->db->get_where('tb_kontrakan',array('tipe' => 'Tipe A'));
    }

    public function tipe_b(){
    return $this->db->get_where('tb_kontrakan',array('tipe' => 'Tipe B'));
    }

    public function tipe_c(){
    return $this->db->get_where('tb_kontrakan',array('tipe' => 'Tipe C'));
    }
}