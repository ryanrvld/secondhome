<?php

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
       $data['kontrakan'] = $this->model_kontrakan->tampil_data()->result();
       $data['judul'] = 'SecondHome';
       $this->load->view('templates/header', $data);
       $this->load->view('user/index', $data);
       $this->load->view('templates/footer');
    }

    public function detail($id_kontrakan)
    {
        $kontrakan = $this->model_kontrakan->detail_kontrakan($id_kontrakan);
        $kontrakan->rincian = $this->model_kontrakan->get_detail( $id_kontrakan )->row();
        
        $data['kontrakan'] = $kontrakan;
        $data['judul'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $datas =$this->model_kontrakan->tampil_data()->result();
        
        foreach( $datas as $d ) {
            $d->rincian = $this->model_kontrakan->get_detail($d->id_kontrakan)->row();

        }

        $this->load->view('templates/header', $data);
        $this->load->view('detail_kontrakan', $data);
        $this->load->view('templates/footer');
    }

    public function cari()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
        $keyword = $this->input->post('keyword');
        $data['kontrakan'] = $this->model_kontrakan->get_keyword($keyword);
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}