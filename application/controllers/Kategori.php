<?php

class Kategori extends CI_Controller{

    public function harga3jt()
    {
        $data['harga3jt'] = $this->model_harga->harga_tigajuta()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/header', $data);
        $this->load->view('harga3jt', $data);
        $this->load->view('templates/footer');
    }

    public function harga4jt()
    {
        $data['harga4jt'] = $this->model_harga->harga_empatjuta()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/header', $data);
        $this->load->view('harga4jt', $data);
        $this->load->view('templates/footer');
    }

    public function harga5jt()
    {
        $data['harga5jt'] = $this->model_harga->harga_limajuta()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/header', $data);
        $this->load->view('harga5jt', $data);
        $this->load->view('templates/footer');
    }

    public function tipea()
    {
        $data['tipea'] = $this->model_tipe->tipe_a()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/header', $data);
        $this->load->view('tipea', $data);
        $this->load->view('templates/footer');
    }

    public function tipeb()
    {
        $data['tipeb'] = $this->model_tipe->tipe_b()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/header', $data);
        $this->load->view('tipeb', $data);
        $this->load->view('templates/footer');
    }

    public function tipec()
    {
        $data['tipec'] = $this->model_tipe->tipe_c()->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/header', $data);
        $this->load->view('tipec', $data);
        $this->load->view('templates/footer');
    }
}