<?php

class Model_harga extends CI_Model{
    public function harga_tigajuta(){
    return $this->db->get_where('tb_kontrakan',array('harga' => '3000000'));
    }

    public function harga_empatjuta(){
        return $this->db->get_where('tb_kontrakan',array('harga' => '4000000'));
    }

    public function harga_limajuta(){
        return $this->db->get_where('tb_kontrakan',array('harga' => '5000000'));
    }
}