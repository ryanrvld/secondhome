<?php

class Model_kontrakan extends CI_Model{
    
    public function tampil_data(){
        return $this->db->get('tb_kontrakan');

    }

    public function tambah_kontrakan($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_kontrakan($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);    
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_kontrakan($id_kontrakan)
    {
        $result = $this->db->where('id_kontrakan', $id_kontrakan)->get('tb_kontrakan');

        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return false;
        }
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_kontrakan');
        $this->db->like('nama_kontrakan', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('pemilik', $keyword);
        $this->db->or_like('tipe', $keyword);
        $this->db->or_like('harga', $keyword);
        return $this->db->get()->result();
    }

    public function get_detail($id_kontrakan)
    {
        return $this->db->where('id_kontrakan', $id_kontrakan)->get('tb_rincian');
                    
    }

    // rincian

    public function edit_rincian($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_rincian($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);    
    }
}
