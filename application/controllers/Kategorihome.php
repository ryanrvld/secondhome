<?php

class Kategorihome extends CI_Controller{

    public function harga3jthome()
    {
        $data['harga3jt'] = $this->model_harga->harga_tigajuta()->result();
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/headerhome', $data);
        $this->load->view('harga/harga3jthome', $data);
        $this->load->view('templates/footer');
    }

    public function harga4jthome()
    {
        $data['harga4jt'] = $this->model_harga->harga_empatjuta()->result();
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/headerhome', $data);
        $this->load->view('harga/harga4jthome', $data);
        $this->load->view('templates/footer');
    }

    public function harga5jthome()
    {
        $data['harga5jt'] = $this->model_harga->harga_limajuta()->result();
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/headerhome', $data);
        $this->load->view('harga/harga5jthome', $data);
        $this->load->view('templates/footer');
    }

    public function tipeahome()
    {
        $data['tipea'] = $this->model_tipe->tipe_a()->result();
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/headerhome', $data);
        $this->load->view('tipe/tipeahome', $data);
        $this->load->view('templates/footer');
    }

    public function tipebhome()
    {
        $data['tipeb'] = $this->model_tipe->tipe_b()->result();
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/headerhome', $data);
        $this->load->view('tipe/tipebhome', $data);
        $this->load->view('templates/footer');
    }

    public function tipechome()
    {
        $data['tipec'] = $this->model_tipe->tipe_c()->result();
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/headerhome', $data);
        $this->load->view('tipe/tipechome', $data);
        $this->load->view('templates/footer');
    }
}