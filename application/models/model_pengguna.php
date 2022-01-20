<?php

class Model_pengguna extends CI_Model{
    public function tampil_data(){
        return $this->db->get('user');

    }

    public function edit_user($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_pengguna($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);    
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}
