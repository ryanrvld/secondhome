<?php

class Admin extends CI_Controller {

   public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    
    public function index()
    {
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $data['judul'] = 'SecondHomeAdmin';
       $this->load->view('templates/sbheader', $data);
       $this->load->view('templates/sbsidebar',$data );
       $this->load->view('templates/sbtopbar', $data);
       $this->load->view('admin/dashboard', $data);
       $this->load->view('templates/sbfooter');   
     }

       public function menu()
       {
          $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
          $data['kontrakan'] = $this->model_kontrakan->tampil_data()->result();
          
          $data['judul'] = 'Menu';
          $this->load->view('templates/sbheader', $data);
          $this->load->view('templates/sbsidebar', $data);
          $this->load->view('templates/sbtopbar', $data);
          $this->load->view('admin/menu', $data);
          $this->load->view('templates/sbfooter');    
        }

        public function tambah_aksi()
        {
            $nama_kontrakan = $this->input->post('nama_kontrakan');
            $alamat  = $this->input->post('alamat');
            $pemilik = $this->input->post('pemilik');
            $tipe    = $this->input->post('tipe');
            $harga   = $this->input->post('harga');
            $gambar  = $_FILES['gambar']['name'];
            if($gambar =''){}else{
                $config ['upload_path'] = './assets/img';
                $config ['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar')){
                    echo "Gambar Gagal Diapload!";
                }else{
                    $gambar=$this->upload->data('file_name');
                }
            }
            
            $data = array(
                'nama_kontrakan' => $nama_kontrakan,
                'alamat'         => $alamat,
                'pemilik'        => $pemilik,
                'tipe'           => $tipe,
                'harga'          => $harga,
                'gambar'         => $gambar
            );

            $this->model_kontrakan->tambah_kontrakan($data, 'tb_kontrakan');
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('success', 'Data berhasil ditambah');
            }
            redirect('admin/menu');
        
    }

        public function edit($id)
        {
            $where = array('id_kontrakan' =>$id);
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['kontrakan'] = $this->model_kontrakan->edit_kontrakan($where, 'tb_kontrakan')->result();
            $data['judul'] = 'Edit Data';
           
            $this->load->view('templates/sbheader', $data);
            $this->load->view('templates/sbsidebar', $data);
            $this->load->view('templates/sbtopbar', $data);
            $this->load->view('admin/edit_kontrakan', $data);
            $this->load->view('templates/sbfooter');
        }

        public function update(){
            $id             = $this->input->post('id_kontrakan');
            $nama_kontrakan = $this->input->post('nama_kontrakan');
            $alamat         = $this->input->post('alamat');
            $pemilik        = $this->input->post('pemilik');
            $tipe           = $this->input->post('tipe');
            $harga          = $this->input->post('harga');

            $data = array(
                'nama_kontrakan' => $nama_kontrakan,
                'alamat'         => $alamat,
                'pemilik'        => $pemilik,
                'tipe'           => $tipe,
                'harga'          => $harga,
            );

            $where = array(
                'id_kontrakan' => $id
            );

            $this->model_kontrakan->update_data($where,$data, 'tb_kontrakan');
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('success', 'Data berhasil diubah');
            }
            redirect('admin/menu');
        }

        public function hapus($id)
        {
            $where = array('id_kontrakan' => $id);
            $this->model_kontrakan->hapus_data($where, 'tb_kontrakan');
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('success', 'Data berhasil dihapus');
            }
            redirect('admin/menu');
        }

       public function pengguna()
       {
          $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
          $data['pengguna'] = $this->model_pengguna->tampil_data()->result();
          
          $data['judul'] = 'Pengguna';
          $this->load->view('templates/sbheader', $data);
          $this->load->view('templates/sbsidebar', $data);
          $this->load->view('templates/sbtopbar', $data);
          $this->load->view('admin/pengguna', $data);
          $this->load->view('templates/sbfooter');    
        }

        public function profile()
       {
          $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
   
          $data['judul'] = 'Profile';
          $this->load->view('templates/sbheader', $data);
          $this->load->view('templates/sbsidebar', $data);
          $this->load->view('templates/sbtopbar', $data);
          $this->load->view('admin/profile', $data);
          $this->load->view('templates/sbfooter');    
        }
        public function dashboard()
       {
          $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
   
          $data['judul'] = 'Profile';
          $this->load->view('templates/sbheader', $data);
          $this->load->view('templates/sbsidebar', $data);
          $this->load->view('templates/sbtopbar', $data);
          $this->load->view('admin/dashboard', $data);
          $this->load->view('templates/sbfooter');    
        }

        // CRUD pengguna

        public function editu($iduser)
        {
            $where = array('id' =>$iduser);
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['pengguna'] = $this->model_pengguna->edit_user($where, 'user')->result();
            $data['judul'] = 'Edit user';
           
            $this->load->view('templates/sbheader', $data);
            $this->load->view('templates/sbsidebar', $data);
            $this->load->view('templates/sbtopbar', $data);
            $this->load->view('admin/edit_user', $data);
            $this->load->view('templates/sbfooter');
        }

        public function updateu(){
            $id               = $this->input->post('id');
            $name             = $this->input->post('name');
            $role_id          = $this->input->post('role_id');
            $image            = $this->input->post('image');
           

            $data = array(
                'name'       => $name,
                'role_id'    => $role_id,
                'image'      => $image,
                
            );

            $where = array(
                'id' => $id
            );

            $this->model_pengguna->update_pengguna($where,$data, 'user');
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('success', 'Data berhasil diubah');
            }
            redirect('admin/pengguna');
        }

        public function hapusu($id)
        {
            $where = array('id' => $id);
            $this->model_pengguna->hapus_data($where, 'user');
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('success', 'Data berhasil dihapus');
            }
            redirect('admin/pengguna');
        }


        // edit rincian

        public function erincian($idrincian)
        {
            $where = array('id_rincian' =>$idrincian);
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['rincian'] = $this->model_kontrakan->edit_rincian($where, 'tb_rincian')->result();
            $data['judul'] = 'Edit Data';
           
            $this->load->view('templates/sbheader', $data);
            $this->load->view('templates/sbsidebar', $data);
            $this->load->view('templates/sbtopbar', $data);
            $this->load->view('admin/edit_rincian', $data);
            $this->load->view('templates/sbfooter');
        }

        public function urincian(){
            $id             = $this->input->post('id_rincian');
            $luas_tanah     = $this->input->post('luas_tanah');
            $luas_bangunan  = $this->input->post('luas_bangunan');
            $kamar_tidur    = $this->input->post('kamar_tidur');
            $kamar_mandi    = $this->input->post('kamar_mandi');
            $deskripsi      = $this->input->post('deskripsi');

            $data = array(
                'luas_tanah'         => $luas_tanah,
                'luas_bangunan'      => $luas_bangunan,
                'kamar_tidur'        => $kamar_tidur,
                'kamar_mandi'        => $kamar_mandi,
                'deskripsi'          => $deskripsi,
            );

            $where = array(
                'id_rincian' => $id
            );

            $this->model_kontrakan->update_rincian($where,$data, 'tb_rincian');
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('success', 'Data berhasil diubah');
            }
            redirect('admin/menu');
        }

       

}