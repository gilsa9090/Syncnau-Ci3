<?php

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('log_in_admin') == null) {
            redirect('login_admin', 'refresh');
        }
        $this->load->library('form_validation');
        $this->load->model('M_admin');
        $this->load->helper(array('string'));
        $this->nama = $this->session->userdata('log_in_admin')['nama_admin'];
        $this->image = $this->session->userdata('log_in_admin')['image'];
        $this->id_admin = $this->session->userdata('log_in_admin')['id_admin'];
        $this->password = $this->session->userdata('log_in_admin')['password'];
        $this->username = $this->session->userdata('log_in_admin')['username'];
    }

    public function index()
    {
        $data['title'] = "Admin";
        $data['nama'] = $this->nama;
        $data['user'] = $this->M_admin->getOne($this->id_admin);
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/navbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/template/footer');
    }
}
