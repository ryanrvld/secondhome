<?php

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index()
    {
       
        $data['kontrakan'] = $this->model_kontrakan->tampil_data()->result();
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/headerhome', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');

    }


    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false){
            $data['judul'] = 'Halaman Login';
            
            $this->load->view('templates/headerlogin', $data);
            $this->load->view('auth/login', $data);

        }else {
            $this->_plogin();
        }
    }


    private function _plogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // ada user
        if($user) {
            // user aktif
            if($user['is_active'] == 1){
                // cek password
                if(password_verify($password, $user['password'])){
                    $data =[
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');

                    } else {
                        redirect('user');

                    }

                } else{
                    $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth');
                }

            } else{
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Email anda belum di aktivasi!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Email anda belum terdaftar!</div>');
            redirect('auth');
        }
    }


    public function registration()
    {
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'Email telah terdaftar']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',
         [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
            ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        
        if( $this->form_validation->run() == false){
            $data['judul'] = 'Registration';

            $this->load->view('templates/headerlogin', $data);
            $this->load->view('auth/registration', $data);

        }else{
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()

            ];

             $this->db->insert('user', $data);

            // $this->_sendEmail();

            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Selamat! Akun anda telah dibuat. Silahkan Login</div>');
            redirect('auth');
        }
    }

    // private function _sendEmail()
    // {
    //     $config = [
    //         'protocol' => 'smtp',
    //         'smtp_host' => 'ssl://smtp.googlemail.com',
    //         'smtp_user' => 'cobaactivation@gmail.com',
    //         'smtp_pass' => 'cobawpu01',
    //         'smtp_port' => 465,
    //         'mailtype' => 'html',
    //         'charset' => 'utf-8',
    //         'newline' => "/r/n"
    //     ];

    //     $this->load->library('email', $config);
    //     $this->email->initialize($config);

    //     $this->email->from('cobaactivation@gmail.com', 'Coba');
    //     $this->email->to('ryanrivaldi0501@gmail.com');
    //     $this->email->subject('Testing');
    //     $this->email->message('Hello world!');

    //     if($this->email->send()) {
    //         return true;
    //     }else {
    //         echo $this->email->print_debugger();
    //         die;
    //     }
    // }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Anda telah terdaftar!!</div>');
        redirect('auth');
    }

    public function blocked() {     
        $this->load->view('auth/blocked');
    }

    
    public function detail($id_kontrakan)
    {
        $kontrakan = $this->model_kontrakan->detail_kontrakan($id_kontrakan);
        $kontrakan->rincian = $this->model_kontrakan->get_detail( $id_kontrakan )->row();
        
        $data['kontrakan'] = $kontrakan;
        $data['judul'] = 'Detail';
        $datas =$this->model_kontrakan->tampil_data()->result();
        
        foreach( $datas as $d ) {
            $d->rincian = $this->model_kontrakan->get_detail($d->id_kontrakan)->row();

        }

        $this->load->view('templates/headerhome', $data);
        $this->load->view('detail_kontrakan_home', $data);
        $this->load->view('templates/footer');
    }

    public function cari()
    {
       
        $keyword = $this->input->post('keyword');
        $data['kontrakan'] = $this->model_kontrakan->get_keyword($keyword);
        $data['judul'] = 'SecondHome';
        $this->load->view('templates/headerhome', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function rincian()
    {
        $datas =$this->model_kontrakan->get();

        foreach( $datas as $d ) {
            $d->rincian = $this->model_kontrakan->get_detail($d->id);


        }

        print_r($datas);
        exit;
    }
}