<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('string'));
        $this->load->model('M_user');
        $this->load->model('M_Login');
    }

    public function index()
    {
        if ($this->session->userdata('log_in')) {
            redirect('user', 'refresh');
        } else {
            $data = array(
                'username' => set_value('username'),
                'password' => set_value('password'),
            );
            $this->load->view('user/auth/login', $data);
        }
    }

    public function proses()
    {
        $username     = addslashes(trim($this->input->post('username', true)));
        $password     = addslashes(trim($this->input->post('password', true)));

        $row = $this->M_Login->validasi_adm($username, $password);
        if ($row != null) {
            $this->_daftarkan_session($row);
        } else {
            $this->notifikasi->failLogin();
            redirect('login', 'refresh');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('bio', 'Bio', 'required');


        if ($this->form_validation->run() == false) {
            $data['title'] = "Register";
            $this->load->view('user/auth/register', $data);
        } else {
            $this->M_user->insert();
            redirect('login');
        }
    }


    public function _daftarkan_session($row)
    {
        array_merge($row, array('is_logged_in' => true));
        $this->session->set_userdata('log_in', $row);
        redirect('user',  'refresh');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
