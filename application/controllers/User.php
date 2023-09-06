<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('log_in') == null) {
            redirect('login', 'refresh');
        }

        $this->load->library('form_validation');
        $this->load->helper(array('string'));
        $this->load->model('M_user');
        $this->nama = $this->session->userdata('log_in')['nama_user'];
        $this->image = $this->session->userdata('log_in')['image'];
        $this->id_user = $this->session->userdata('log_in')['id_user'];
        $this->password = $this->session->userdata('log_in')['password'];
        $this->username = $this->session->userdata('log_in')['username'];
        $this->role = $this->session->userdata('log_in')['level'];
        $this->is_active = $this->session->userdata('log_in')['is_active'];
        if ($this->is_active == 0){
            echo "Mohon maaf user belum diaktifkan";
            die();
        } 
    }
    public function index()
    {
        $data['title'] = "User";
        $data['nama'] = $this->nama;
        $data['user'] = $this->M_user->getOne($this->id_user);
        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/template/footer');
    }
}